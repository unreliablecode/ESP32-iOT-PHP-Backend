import network
import urequests
import machine
import time
import dht

# Set up your Wi-Fi credentials
SSID = 'Wokwi-GUEST'
PASSWORD = 'your_password'

# Set up relay pins
relays = [machine.Pin(i, machine.Pin.OUT) for i in [25, 26, 27, 14]]

# Set up temperature sensor
dht_pin = machine.Pin(4)  # DHT sensor connected to GPIO4
dht_sensor = dht.DHT22(dht_pin)

# Function to connect to Wi-Fi
def connect_wifi():
    wlan = network.WLAN(network.STA_IF)
    wlan.active(True)
    if not wlan.isconnected():
        print('Connecting to network...')
        wlan.connect(SSID, PASSWORD)
        while not wlan.isconnected():
            pass
    print('Network config:', wlan.ifconfig())

# Function to get temperature and send it to the server
def send_data():
    try:
        dht_sensor.measure()
        temp = dht_sensor.temperature()  # Get temperature in Celsius
        url = "http://your-server-ip/temperature.php"
        data = {'temperature': temp}
        response = urequests.post(url, json=data)
        print(response.text)
    except Exception as e:
        print('Failed to send data:', e)

# Function to check relay state from server
def update_relay_states():
    try:
        url = "http://your-server-ip/get-relay-status.php"
        response = urequests.get(url)
        relay_states = response.json()
        for i in range(4):
            relays[i].value(relay_states[i])  # Control relays
    except Exception as e:
        print('Failed to update relays:', e)

# Main loop
connect_wifi()
while True:
    send_data()           # Send temperature data
    update_relay_states()  # Update relay states from server
    time.sleep(10)         # Wait 10 seconds before the next update
