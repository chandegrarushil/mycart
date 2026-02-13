# MyCart - E-Commerce Shopping Cart for Home Appliances

![MyCart Logo](admin/blogo.png)

MyCart is a full-featured e-commerce shopping cart application built with PHP and MySQL. It provides a complete online shopping experience for home appliances including Air Conditioners, Refrigerators, Coolers, Washing Machines, Chimneys, Vacuum Cleaners, Mixers, Irons, and other electronics.

## 🚀 Features

### Customer Features
- **Product Catalog**: Browse products by category (AC, Refrigerator, Coolers, Washing Machine, Chimney, Mixer, Vacuum Cleaner, Iron, Others)
- **User Registration & Login**: Create an account and manage your profile
- **Product Details**: View detailed product information including specifications
- **Shopping Cart**: Add products to cart and manage quantities
- **Order Booking**: Place orders with delivery address and payment details
- **Feedback System**: Submit feedback and reviews

### Admin Features
- **Dashboard**: Overview of the system
- **Product Management**: Add, view, and manage products
- **Order Management**: View and manage customer orders
- **User Management**: View registered users
- **Feedback Management**: View customer feedback

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: WAMP/XAMPP (Local development)

## 📁 Project Structure

```
mycart/
├── admin/                    # Admin panel files
│   ├── index.php           # Admin dashboard
│   ├── addproduct.php      # Add products
│   ├── delete.php          # Delete products
│   ├── orders.php          # View orders
│   ├── user.php            # User management
│   ├── feedback.php        # View feedback
│   ├── connection.php      # Database connection
│   ├── adminnavbar.php     # Admin navigation
│   └── *.css               # Admin stylesheets
│
├── client/                  # Client/Customer facing files
│   ├── index.php           # Home page
│   ├── allproducts.php     # All products page
│   ├── ac.php              # AC products
│   ├── refrigerator.php    # Refrigerator products
│   ├── cooler.php          # Cooler products
│   ├── washing.php         # Washing machine products
│   ├── chimney.php         # Chimney products
│   ├── mixer.php           # Mixer products
│   ├── vacuum.php          # Vacuum cleaner products
│   ├── iron.php            # Iron products
│   ├── others.php          # Other products
│   ├── login.php           # User login
│   ├── register.php        # User registration
│   ├── book.php            # Order booking
│   ├── contactus.php       # Contact us page
│   ├── feedback.php        # Feedback form
│   ├── connection.php      # Database connection
│   ├── navbar.php          # Navigation bar
│   ├── footer.php          # Footer
│   └── *.css               # Client stylesheets
│
├── mycart.sql              # Database schema and sample data
├── mycart1.sql             # Additional database file
└── README.md               # This file
```

## 📊 Database Schema

The database `mycart` contains the following tables:

### 1. `admin` Table
| Column | Type | Description |
|--------|------|-------------|
| email | VARCHAR(100) | Admin email (Primary Key) |
| pass | VARCHAR(10) | Admin password |

### 2. `product` Table
| Column | Type | Description |
|--------|------|-------------|
| proid | INT | Product ID (Auto-increment) |
| proname | VARCHAR(255) | Product name |
| prodesc | VARCHAR(255) | Product description |
| category | VARCHAR(255) | Product category |
| proqty | INT | Product quantity |
| price | VARCHAR(255) | Product price |
| proimage | VARCHAR(255) | Product image filename |

### 3. `register` Table
| Column | Type | Description |
|--------|------|-------------|
| userid | INT | User ID (Auto-increment) |
| username | VARCHAR(50) | User name |
| useremail | VARCHAR(100) | User email (Unique) |
| usermobile | VARCHAR(10) | User mobile number |
| userpassword | VARCHAR(8) | User password |

### 4. `booking` Table
| Column | Type | Description |
|--------|------|-------------|
| orderid | INT | Order ID (Auto-increment) |
| proid | INT | Product ID |
| cname | VARCHAR(255) | Customer name |
| phoneno | VARCHAR(10) | Phone number |
| email | VARCHAR(255) | Customer email |
| address | VARCHAR(255) | Delivery address |
| date | DATE | Order date |
| cardno | VARCHAR(255) | Payment card number |

### 5. `feedback` Table
| Column | Type | Description |
|--------|------|-------------|
| fid | INT | Feedback ID (Auto-increment) |
| name | VARCHAR(255) | Feedback sender name |
| email | VARCHAR(255) | Feedback sender email |
| message | TEXT | Feedback message |

## ⚙️ Installation & Setup

### Prerequisites
- WAMP/XAMPP server installed
- PHP 7.4 or higher
- MySQL 8.0 or higher
- Web browser (Chrome, Firefox, Edge, etc.)

### Steps to Install

1. **Clone or Download the Project**
   - Copy the project folder to your WAMP/XAMPP `www` or `htdocs` directory
   - For WAMP: `C:\wamp64\www\mycart\`
   - For XAMPP: `C:\xampp\htdocs\mycart\`

2. **Set Up the Database**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `mycart`
   - Import the `mycart.sql` file:
     - Go to Import tab
     - Select `mycart.sql` file
     - Click Go

3. **Configure Database Connection**
   - The default configuration in `client/connection.php` and `admin/connection.php` is:
     ```php
     $con = mysqli_connect("localhost", "root", "", "mycart");
     ```
   - If your MySQL has a password, modify both files accordingly:
     ```php
     $con = mysqli_connect("localhost", "root", "your_password", "mycart");
     ```

4. **Start the Server**
   - Start WAMP/XAMPP services
   - Ensure Apache and MySQL services are running

5. **Access the Application**
   - **Client Site**: http://localhost/mycart/client/
   - **Admin Panel**: http://localhost/mycart/admin/

## 🔑 Default Credentials

### Admin Login
| Field | Value |
|-------|-------|
| Email | mycartadmin@gmail.com |
| Password | mycartadmi |

### Sample User Login
| Field | Value |
|-------|-------|
| Email | mycart@gmail.com |
| Password | mycart |

## 📸 Product Categories

The application includes the following product categories:

1. **Air Conditioners (AC)** - Split AC, Window AC, Inverter AC
2. **Refrigerators** - Single Door, Double Door, Side-by-Side
3. **Coolers** - Personal Coolers, Desert Coolers
4. **Washing Machines** - Front Load, Top Load, Semi-Automatic
5. **Chimneys** - Wall-mounted, Island chimneys
6. **Vacuum Cleaners** - Wet & Dry, Dry cleaners
7. **Mixers** - Mixer grinders, Juicer mixers
8. **Irons** - Steam irons, Dry irons
9. **Others** - Mouse, Speakers, Headphones

## 📱 Pages Overview

### Client Pages
- **index.php** - Home page with product categories
- **allproducts.php** - Display all products
- **login.php** - User login
- **register.php** - User registration
- **book.php** - Order booking form
- **contactus.php** - Contact information
- **feedback.php** - Feedback submission

### Admin Pages
- **index.php** - Admin dashboard
- **addproduct.php** - Add new product
- **orders.php** - View all orders
- **user.php** - View registered users
- **feedback.php** - View customer feedback
- **delete.php** - Delete products

## 🔧 Configuration Files

### Database Connection (client/connection.php)
```php
<?php
    $con = mysqli_connect("localhost", "root", "", "mycart");
?>
```

### Database Connection (admin/connection.php)
```php
<?php
    $con = mysqli_connect("localhost", "root", "", "mycart");
?>
```

## 🖼️ Screenshots

The application includes the following UI components:
- Responsive navigation bar
- Product category sections
- Product grid with images
- Shopping cart functionality
- Login/Registration forms
- Order booking form
- Admin dashboard

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](../../issues).

## 📝 License

This project is licensed under the MIT License.

## 👨‍💻 Author

**MyCart Development Team**

---

<div align="center">
  Made with ❤️ for online shopping
</div>
