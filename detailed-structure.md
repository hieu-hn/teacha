# Chi tiết cấu trúc hệ thống

## Thư mục gốc (Root Directory)
- `config.php` - File cấu hình chính
  - Chứa cấu hình database
  - Đường dẫn hệ thống
  - Các thiết lập bảo mật
- `index.php` - File khởi động chính của ứng dụng
- `php.ini` - Cấu hình PHP
- `robots.txt` - Quy tắc cho search engine
- `project-structure.md` - Tài liệu cấu trúc dự án

## Thư mục cài đặt (_install_/)
### File chính
- `cli_install.php` - Script cài đặt qua command line
  - Xử lý cài đặt tự động
  - Kiểm tra yêu cầu hệ thống
  - Tạo cấu trúc database
- `index.php` - Giao diện cài đặt web
- `opencart.sql` - Schema database

### Controllers (_install_/controller/)
#### Third Party (3rd_party/)
- Tích hợp các dịch vụ bên thứ ba

#### Common (common/)
- Xử lý chung cho quá trình cài đặt

#### Error (error/)
- Xử lý lỗi trong quá trình cài đặt

#### Event (event/)
- Quản lý các sự kiện cài đặt

#### Install (install/)
- Logic cài đặt chính
- Kiểm tra điều kiện
- Tạo database
- Cấu hình ban đầu

#### Startup (startup/)
- Khởi tạo môi trường cài đặt

#### Upgrade (upgrade/)
- Xử lý nâng cấp phiên bản

### Models (_install_/model/)
- `install/` - Models xử lý cài đặt
- `upgrade/` - Models xử lý nâng cấp

## Admin Panel (admin/)
### File chính
- `config.php` - Cấu hình riêng cho admin
- `index.php` - Điểm vào admin panel

### Controllers (admin/controller/)
#### Catalog Management (catalog/)
- Quản lý sản phẩm
- Quản lý danh mục
- Quản lý nhà sản xuất
- Quản lý đánh giá

#### Common (common/)
- Dashboard
- Login/Logout
- Header/Footer
- Menu navigation

#### Customer (customer/)
- Quản lý khách hàng
- Nhóm khách hàng
- Phê duyệt khách hàng
- Lịch sử khách hàng

#### Design (design/)
- Layout
- Banner
- SEO URL
- Theme editor

#### Extension (extension/)
- Module
- Payment
- Shipping
- Total
- Feed
- Analytics

#### Localisation (localisation/)
- Languages
- Currencies
- Stock statuses
- Order statuses
- Returns
- Countries
- Zones
- Taxes

#### Marketing (marketing/)
- Marketing campaigns
- Affiliates
- Coupons
- Gift vouchers

#### Sale (sale/)
- Orders
- Recurring orders
- Returns
- Gift vouchers

#### System (setting/)
- Settings
- Users
- User groups
- API
- Backups

### Models (admin/model/)
- Tương ứng với cấu trúc của controllers
- Xử lý dữ liệu cho từng chức năng

### Views (admin/view/)
#### Template (template/)
- Giao diện cho từng chức năng admin
- Layout chung
- Components tái sử dụng

#### JavaScript (javascript/)
- Scripts xử lý client-side
- Validation
- AJAX requests
- UI interactions

#### Stylesheet (stylesheet/)
- CSS files
- SCSS/LESS nếu có
- Theme customizations

## Front-end Store (catalog/)
### Controllers (catalog/controller/)
#### Account (account/)
- Login/Register
- Account management
- Order history
- Wish list
- Newsletter
- Returns

#### Affiliate (affiliate/)
- Affiliate program management
- Tracking
- Transactions
- Payments

#### API (api/)
- RESTful endpoints
- Authentication
- Data access

#### Checkout (checkout/)
- Shopping cart
- Checkout process
- Payment integration
- Order confirmation

#### Common (common/)
- Header/Footer
- Home page
- Navigation
- Search

#### Product (product/)
- Product listing
- Product details
- Categories
- Search
- Compare
- Reviews

### Models (catalog/model/)
#### Account (account/)
- User authentication
- Profile management
- Address book
- Order history

#### Catalog (catalog/)
- Product retrieval
- Category management
- Manufacturer data
- Review handling

#### Checkout (checkout/)
- Cart operations
- Order processing
- Payment handling
- Shipping calculation

## System Core (system/)
### File chính
- `framework.php` - Core framework
- `startup.php` - System initialization
- `modification.xml` - System modifications

### Libraries (system/library/)
#### Cache
- File caching
- Memory caching
- Cache management

#### Database
- Database abstraction
- Query builder
- Results handling

#### Mail
- SMTP support
- Mail templates
- Attachments

#### Session
- Session handling
- Session security
- Cookie management

#### Template
- Template engine
- Layout processing
- View rendering

#### Payment Integration
- PayPal integration
- Square integration
- Payment processing
- Transaction handling

### Storage (system/storage/)
- `cache/` - File cache storage
- `download/` - Downloadable files
- `logs/` - System logs
  - Error logs
  - Debug logs
  - Access logs

## Assets
### Images (image/)
- `no_image.png` - Default image placeholder
- `placeholder.png` - Loading placeholder
- `profile.png` - Default profile image

#### Cache (image/cache/)
- Cached product images
- Resized images
- Thumbnail cache

#### Catalog (image/catalog/)
- Product images
- Category images
- Manufacturer logos
- Banner images

#### Payment (image/payment/)
- Payment gateway logos
- Payment method icons

---

## Note về Kiến trúc
1. **MVC Pattern**
   - Mỗi phần (Admin, Catalog) tuân theo mô hình MVC
   - Controllers xử lý logic
   - Models tương tác với database
   - Views render giao diện

2. **Bảo mật**
   - Tách biệt admin và catalog
   - Kiểm soát quyền truy cập
   - Validation dữ liệu

3. **Mở rộng**
   - Hệ thống module
   - Extension system
   - Override capability

4. **Performance**
   - Cache system
   - Image optimization
   - Database indexing
