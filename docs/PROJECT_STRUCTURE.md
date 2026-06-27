# PROJECT_STRUCTURE.md

# Clitoria Digital Commerce Platform

Version: 1.0

Architecture Style: Modular Monolith (Domain-Oriented Architecture)

Framework: Laravel 12

---

# 1. Purpose

Dokumen ini mendefinisikan struktur proyek, organisasi source code, pemisahan domain bisnis, serta standar pengembangan untuk Clitoria Digital Commerce Platform.

Tujuan utama:

* Menjaga maintainability
* Mempermudah scaling fitur
* Mengurangi coupling antar module
* Mempermudah onboarding developer baru
* Menjadi pedoman implementasi Laravel

---

# 2. Architecture Overview

Clitoria menggunakan pendekatan:

Domain-Oriented Modular Monolith

Bukan:

Traditional Laravel MVC

Karena aplikasi memiliki beberapa domain bisnis yang berbeda:

* Authentication
* Content Management
* Commerce
* Analytics
* Settings

Setiap domain memiliki tanggung jawab yang jelas dan terisolasi.

---

# 3. High Level Architecture

```text
┌───────────────────────────┐
│      Presentation Layer   │
│  Blade + Tailwind + JS    │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│       Controller Layer    │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│        Service Layer      │
│     Business Process      │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│      Repository Layer     │
│      Data Access Logic    │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│        Eloquent ORM       │
└─────────────┬─────────────┘
              │
┌─────────────▼─────────────┐
│        MySQL Database     │
└───────────────────────────┘
```

---

# 4. Root Directory Structure

```text
clitoria/

├── app/
├── bootstrap/
├── config/
├── database/
├── docs/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/

├── artisan
├── composer.json
├── package.json
├── README.md
```

---

# 5. Documentation Structure

```text
docs/

├── PRD.md
├── SRS.md

├── ERD.dbml
├── ERD.png
├── SCHEMA.md
├── DESAIN.md
│
│   UI/UX Source of Truth
│   Design System
│   Component Registry
│   Layout Tree
│   Responsive Rules
│   UI Contract
│
├── PROJECT_STRUCTURE.md
├── DEVELOPMENT_ROADMAP.md
├── PROJECT_CONTEXT.md
├── TASK_EXECUTION_PLAN.md
```

# 5.1 Documentation Authority

```
Each document has a specific responsibility and authority.

PRD.md
→ Business Requirements Authority

SRS.md
→ Functional Requirements Authority

ERD.dbml
→ Data Relationship Reference

SCHEMA.md
→ Database Source of Truth

DESAIN.md
→ UI/UX Source of Truth

PROJECT_STRUCTURE.md
→ Architecture Source of Truth

DEVELOPMENT_ROADMAP.md
→ Feature Planning Authority

TASK_EXECUTION_PLAN.md
→ Task Execution Authority
```

---

# 6. Application Structure

```text
app/

├── Domains/
├── Http/
├── Providers/
├── View/
├── Exceptions/
```

---

# 7. Domain Structure

```text
app/Domains/

├── Auth/
├── CMS/
├── Commerce/
├── Analytics/
├── Settings/
```

Domain menjadi unit organisasi utama aplikasi.

---

# 8. Authentication Domain

```text
Auth/

├── Models/
│   └── User.php
│
├── Controllers/
│   └── AuthController.php
│
├── Requests/
│
├── Services/
│
├── Policies/
```

Responsibilities:

* Login
* Logout
* Session Management
* Authorization

---

# 9. CMS Domain

```text
CMS/

├── Hero/
├── Benefit/
├── Gallery/
├── Testimonial/
├── Team/
├── Partner/
```

CMS bertanggung jawab mengelola seluruh konten website.

---

# 10. Hero Module

```text
Hero/

├── Models/
│   └── Hero.php
│
├── Controllers/
│   └── HeroController.php
│
├── Requests/
│   ├── UpdateHeroRequest.php
│
├── Services/
│   └── HeroService.php
│
├── Repositories/
│   └── HeroRepository.php
```

Responsibilities:

* Hero content management
* Hero image management

---

# 11. Benefit Module

```text
Benefit/

├── Models/
├── Controllers/
├── Requests/
├── Services/
├── Repositories/
```

Responsibilities:

* Benefit CRUD
* Benefit ordering
* Benefit visibility

---

# 12. Gallery Module

```text
Gallery/

├── Models/
├── Controllers/
├── Requests/
├── Services/
├── Repositories/
```

Responsibilities:

* Gallery CRUD
* Image upload
* Gallery visibility

---

# 13. Testimonial Module

```text
Testimonial/

├── Models/
├── Controllers/
├── Requests/
├── Services/
├── Repositories/
```

Responsibilities:

* Testimonial CRUD
* Featured testimonial management

---

# 14. Team Module

```text
Team/

├── Models/
├── Controllers/
├── Requests/
├── Services/
├── Repositories/
```

Responsibilities:

* Team member management
* Social profile management

---

# 15. Partner Module

```text
Partner/

├── Models/
├── Controllers/
├── Requests/
├── Services/
├── Repositories/
```

Responsibilities:

* Partner logo management
* Partner information management

---

# 16. Commerce Domain

```text
Commerce/

├── Product/
├── ProductPrice/
├── Cart/
├── Checkout/
```

Commerce menangani seluruh proses penjualan.

---

# 17. Product Module

```text
Product/

├── Models/
│   └── Product.php
│
├── Controllers/
│
├── Requests/
│
├── Services/
│
├── Repositories/
│
├── Policies/
```

Responsibilities:

* Product CRUD
* Product publishing
* Product visibility

---

# 18. Product Price Module

```text
ProductPrice/

├── Models/
├── Controllers/
├── Requests/
├── Services/
├── Repositories/
```

Responsibilities:

* Product pricing management
* Bundle management

---

# 19. Cart Module

```text
Cart/

├── DTOs/
├── Actions/
├── Services/
```

Responsibilities:

* Session cart management
* Quantity management
* Cart summary calculation

Notes:

Cart menggunakan Laravel Session.

Tidak memiliki database table.

---

# 20. Checkout Module

```text
Checkout/

├── DTOs/
├── Actions/
├── Services/
```

Responsibilities:

* WhatsApp message generation
* Checkout validation
* Order summary creation

Example Action:

```text
GenerateWhatsappMessageAction
```

---

# 21. Analytics Domain

```text
Analytics/

├── Dashboard/
├── Sales/
├── Reports/
```

Analytics digunakan untuk monitoring bisnis.

---

# 22. Dashboard Module

```text
Dashboard/

├── Controllers/
├── Services/
```

Responsibilities:

* Dashboard metrics
* Revenue metrics
* Sales metrics

---

# 23. Sales Module

```text
Sales/

├── Models/
│   ├── Sale.php
│   └── SaleItem.php
│
├── Controllers/
├── Requests/
├── Services/
├── Repositories/
├── Actions/
```

Responsibilities:

* Sales recording
* Revenue calculation
* Product sales statistics

---

# 24. Reports Module

```text
Reports/

├── Services/
├── DTOs/
```

Responsibilities:

* Daily sales report
* Monthly sales report
* Product performance report

---

# 25. Settings Domain

```text
Settings/

├── Business/
├── SEO/
```

---

# 26. Business Settings Module

```text
Business/

├── Controllers/
├── Services/
├── Repositories/
```

Responsibilities:

* WhatsApp configuration
* Business email configuration
* Address configuration
* Social media configuration

---

# 27. SEO Settings Module

```text
SEO/

├── Controllers/
├── Services/
├── Repositories/
```

Responsibilities:

* Meta title
* Meta description
* Meta keywords
* Open Graph image

---

# 28. Route Structure

```text
routes/

├── web.php
├── admin.php
├── auth.php
├── commerce.php
```

Responsibilities:

web.php

* Public pages

auth.php

* Authentication

admin.php

* CMS & Admin

commerce.php

* Cart & Checkout

---

# 29. View Structure

```text
resources/views/
├── layouts/
│   ├── public.blade.php
│   └── admin.blade.php
│
├── components/
│   ├── public/
│   └── admin/
│
├── public/
├── admin/
```

---

# 30. Public Views

```text
public/

├── home.blade.php
├── products.blade.php
├── product-detail.blade.php
├── cart.blade.php
```

---

# 31. Admin Views

```text
admin/

├── dashboard/
├── products/
├── sales/
├── benefits/
├── gallery/
├── testimonials/
├── teams/
├── partners/
├── settings/
├── seo/
```

---

# 32. Database Structure

```text
database/

├── migrations/
├── seeders/
├── factories/
```

---

# 33. Seeder Structure

```text
seeders/

├── UserSeeder.php
├── HeroSeeder.php
├── BenefitSeeder.php
├── ProductSeeder.php
├── GallerySeeder.php
├── TestimonialSeeder.php
├── TeamSeeder.php
├── PartnerSeeder.php
```

---

# 34. Storage Structure

```text
storage/app/public/

├── heroes/
├── products/
├── galleries/
├── testimonials/
├── teams/
├── partners/
├── seo/
```

---

# 35. Service Layer Rules

Controller hanya bertanggung jawab:

* menerima request
* memanggil service
* mengembalikan response

Business logic harus berada pada Service Layer.

Repository bertanggung jawab terhadap akses data.

Controller tidak boleh mengandung business logic kompleks.

---

# 36. Development Standards

Naming Convention:

* Model: PascalCase
* Controller: PascalCaseController
* Service: PascalCaseService
* Repository: PascalCaseRepository
* Request: StoreEntityRequest / UpdateEntityRequest

Database:

* snake_case
* plural table name

Routes:

* kebab-case URL

---

# 37. MVP Scope Modules

Included:

* Authentication
* Hero
* Benefits
* Products
* Product Pricing
* Cart
* WhatsApp Checkout
* Gallery
* Testimonials
* Team
* Partners
* Business Settings
* SEO Settings
* Sales Tracking
* Analytics Dashboard

Excluded:

* Orders
* Customers
* Inventory
* Payment Gateway
* Blog

---

# 38. Future Scalability

Phase 2:

* Order Management
* Customer Management
* Inventory Management
* Blog System

Phase 3:

* Midtrans Integration
* Xendit Integration
* Shipping Integration
* Voucher System
* Full E-Commerce Platform

Arsitektur saat ini harus mendukung ekspansi tersebut tanpa perubahan struktur besar.
