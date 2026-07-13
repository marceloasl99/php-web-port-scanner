# PHP Web Port Scanner

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4)
![License](https://img.shields.io/badge/License-MIT-green)

A web-based TCP port scanner built with PHP.

The application provides an intuitive browser interface allowing users to scan hosts and port ranges without using the command line.

---

# Features

- Browser Interface
- TCP Port Scanner
- Configurable Host
- Custom Port Range
- Fast Scanning
- Lightweight
- Pure PHP
- Responsive Layout

---

# Screenshots

```
docs/screenshots/
```

---

# Requirements

- PHP 7.4+
- Apache or Nginx

---

# Installation

Clone repository

```bash
git clone https://github.com/marceloasl99/php-web-port-scanner.git
```

Copy files to your web server.

Example

```
/var/www/html/
```

Open

```
http://localhost/
```

---

# Configuration

Configure

- Target IP
- Start Port
- End Port
- Timeout

directly from the web interface.

---

# Project Structure

```
php-web-port-scanner

index.html

scan.php

assets/

README.md

LICENSE
```

---

# Example

Target

```
192.168.1.1
```

Range

```
20-1024
```

Result

```
22 OPEN
80 OPEN
443 OPEN
```

---

# Roadmap

Future improvements

- UDP Scanning

- Banner Grabbing

- Service Detection

- Export CSV

- Export JSON

- Multi-thread Scan

- IPv6 Support

- Dark Theme

---

# Security Notice

This software is intended only for authorized security assessments and educational purposes.

Do not scan systems without permission.

---

# License

MIT
