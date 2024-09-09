# ESP32-iOT-PHP-Backend

This project demonstrates how to use an ESP32 microcontroller with MicroPython to monitor temperature and control relays through a PHP-based backend. The ESP32 sends temperature data to a PHP script and retrieves relay states to control four relays. A simple web interface allows users to view temperature data and control relays.

## Project Overview

- **ESP32**: Reads temperature data from a sensor and controls 4 relays.
- **PHP Backend**: Receives temperature data, stores relay states, and provides a web interface for monitoring and control.
- **Web Interface**: Displays temperature and allows relay control through a web page.

## Components

1. **ESP32 (MicroPython)**:
   - Reads data from a temperature sensor (DHT11/DHT22).
   - Controls 4 relays.
   - Communicates with the PHP backend to send temperature data and receive relay states.

2. **PHP Backend**:
   - `temperature.php`: Receives and stores temperature data.
   - `get-relay-status.php`: Returns the current state of relays.
   - `control-relays.php`: Updates relay states based on user input.
   - `index.php`: Provides a web interface for monitoring temperature and controlling relays.

## Installation

### ESP32 (MicroPython)

1. **Flash MicroPython Firmware**: Install MicroPython firmware on your ESP32 board. Instructions can be found on the [MicroPython website](https://micropython.org/download/esp32/).

2. **Upload the Code**:
   - Use a tool like [Thonny](https://thonny.org/) or [uPyCraft](https://github.com/DFRobot/uPyCraft) to upload the MicroPython script to your ESP32.

3. **Configure Wi-Fi**:
   - Update the `SSID` and `PASSWORD` variables in the ESP32 code with your Wi-Fi credentials.

### PHP Backend

1. **Set Up a Web Server**:
   - Host the PHP scripts on a web server (e.g., Apache, Nginx) with PHP support.

2. **Upload PHP Scripts**:
   - Place `temperature.php`, `get-relay-status.php`, `control-relays.php`, and `index.php` in your web server's root directory or a suitable subdirectory.

3. **Database (Optional)**:
   - For persistent storage, you may integrate a database like MySQL to store temperature data and relay states. Modify PHP scripts as needed.

## Usage

1. **ESP32**:
   - The ESP32 will connect to the configured Wi-Fi network and start sending temperature data to the PHP backend.
   - It will also periodically check for updates to the relay states.

2. **Web Interface**:
   - Navigate to `http://your-server-ip/index.php` to access the web interface.
   - View the current temperature and control the relays.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or contributions, please contact [unreliablecode](https://github.com/unreliablecode).

## Acknowledgements

- [MicroPython](https://micropython.org/)
- [PHP](https://www.php.net/)
- [ESP32](https://www.espressif.com/en/products/socs/esp32)
