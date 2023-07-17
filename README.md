# MD5 Hash Password Cracking

![Coursera Web Applications with PHP](https://coursera.org/share/97d5393801825096da1592c99cb87f4f)

This repository contains the code for a password cracking application developed as part of the Coursera course on Web Applications with PHP. The application focuses on cracking MD5 hash passwords using various techniques and strategies.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [Limitations](#limitations)
- [License](#license)

## Introduction

MD5 is a widely used cryptographic hash function that generates a fixed-size hash value from input data. One common use of MD5 is to store password hashes. This repository contains a PHP application designed to reverse MD5 hash passwords and uncover the original passwords from their hashed representations.

The application provides an environment to experiment with password cracking techniques while learning about web applications, PHP programming, and security.

## Features

- **MD5 Hash Cracking:** The application is capable of cracking MD5 hash passwords.
- **Wordlist Attack:** Utilizes a wordlist containing common passwords to perform dictionary-based attacks.
- **Brute Force Attack:** Supports brute force attacks by generating all possible combinations of characters to find the original password.
- **Performance Optimization:** Implements various techniques to improve the efficiency of the cracking process.
- **Command-Line Interface:** Offers a user-friendly CLI to interact with the application and input necessary parameters.
- **Password Salting:** Handles password salting scenarios to ensure realistic password cracking.

## Installation

1. Clone the repository to your local machine:

```bash
git clone https://github.com/rudraparmar76/CrackMD5.git
```

2. Change into the project directory:

```bash
cd CrackMD5
```

3. Ensure you have PHP installed on your system.

## Usage

To crack MD5 hash passwords using this application, follow these steps:

1. Create a file containing the MD5 hash passwords you want to crack, with each hash on a new line. Save this file as `hashes.txt`.

2. Prepare a wordlist file (e.g., `wordlist.txt`) with a list of potential passwords. The application will use this list for dictionary-based attacks.

3. Open a terminal or command prompt and navigate to the project directory.

4. Run the application with the following command:

```bash
php crack.php -h hashes.txt -w wordlist.txt
```

Replace `hashes.txt` with the path to your MD5 hash file and `wordlist.txt` with the path to your wordlist file.

The application will start the cracking process and display the results once it completes.

## Contributing

Contributions to this project are welcome! If you find any bugs or have ideas for improvements, please open an issue or submit a pull request.

## Limitations

Four-Digit PINs Only: The current version of the application is limited to cracking only four-digit PINs. It does not support cracking longer passwords or complex hashes.

## License

This project is licensed under the [MIT License](LICENSE).

---

*Note: The purpose of this application is solely educational, and it should only be used to crack passwords for which you have explicit permission. Unauthorized password cracking is illegal and unethical.*
