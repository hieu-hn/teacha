# Project Structure

## Root Directory
- `config.php` - Main configuration file
- `index.php` - Main entry point
- `php.ini` - PHP configuration
- `robots.txt` - Search engine crawling rules

## Installation (_install_/)
- Installation related files and scripts
  - `cli_install.php` - Command line installation script
  - `index.php` - Web installation interface
  - `opencart.sql` - Database schema

### Installation Components
- `controller/` - Installation controllers
  - `3rd_party/` - Third-party integrations
  - `common/` - Common controllers
  - `error/` - Error handling
  - `event/` - Event handlers
  - `install/` - Installation process
  - `startup/` - Startup procedures
  - `upgrade/` - Upgrade procedures

- `model/` - Installation models
  - `install/` - Installation models
  - `upgrade/` - Upgrade models

## Admin Panel (admin/)
- Administrative interface components
  - `config.php` - Admin configuration
  - `index.php` - Admin entry point

### Admin Components
- `controller/` - Admin controllers
  - `catalog/` - Product catalog management
  - `common/` - Common admin functions
  - `customer/` - Customer management
  - `design/` - UI/UX management
  - `extension/` - Extensions management
  - `localisation/` - Language and region settings
  - `marketing/` - Marketing tools
  - `report/` - Reporting system
  - `sale/` - Sales management
  - `setting/` - System settings
  - `tool/` - Administrative tools
  - `user/` - User management

- `model/` - Admin models
  - Corresponding models for each controller section

## Catalog (catalog/)
- Front-end store components

### Catalog Components
- `controller/`
  - `account/` - User account management
  - `affiliate/` - Affiliate system
  - `api/` - API endpoints
  - `checkout/` - Checkout process
  - `common/` - Common functions
  - `extension/` - Extensions
  - `information/` - Static pages
  - `product/` - Product display
  - `tool/` - User tools

- `model/`
  - `account/` - Account models
  - `catalog/` - Catalog models
  - `checkout/` - Checkout models
  - `extension/` - Extension models
  - `tool/` - Tool models

## System (system/)
Core system components and libraries

### System Components
- `framework.php` - Core framework file
- `startup.php` - System startup procedures
- `modification.xml` - System modifications

### Libraries (system/library/)
- Core libraries for:
  - Caching
  - Database operations
  - Image handling
  - Session management
  - Template processing
  - URL handling
  - Mail functions
  - Payment processing (PayPal, Square)

### Storage (system/storage/)
- `cache/` - System cache
- `download/` - Downloaded files
- `logs/` - System logs

## Assets
- `image/` - Image assets
  - `cache/` - Cached images
  - `catalog/` - Product images
  - `payment/` - Payment gateway images

---

This structure follows a typical OpenCart-based e-commerce system with clear separation between admin, catalog (frontend), and core system components. Each section maintains its own MVC (Model-View-Controller) architecture for better organization and maintainability.
