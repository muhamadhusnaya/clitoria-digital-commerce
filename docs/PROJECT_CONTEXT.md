# PROJECT_CONTEXT.md

# Clitoria Digital Commerce Platform

## AI Execution Core Context

Version: 1.0

---

## PROJECT STATE MANAGEMENT

The project execution state is managed through four documents:

TASK_EXECUTION_PLAN.md
Defines every task in execution order.

CURRENT_SPRINT.md
Defines exactly one executable task.

PROJECT_STATUS.md
Provides a high-level overview of completed, current, and pending work.

CHANGELOG.md
Records historical implementation changes.

Relationship:

TASK_EXECUTION_PLAN.md
        │
        ▼
CURRENT_SPRINT.md
        │
        ▼
PROJECT_STATUS.md
        │
        ▼
CHANGELOG.md

TASK_EXECUTION_PLAN.md is always the Source of Truth.

If any inconsistency exists, TASK_EXECUTION_PLAN.md wins.

---

## DOCUMENT PRIORITY

If documents conflict:

1. CURRENT_SPRINT.md
2. TASK_EXECUTION_PLAN.md
3. PROJECT_STRUCTURE.md
4. SCHEMA.md
5. DESAIN.md
6. PROJECT_CONTEXT.md

---

## TASK EXECUTION CONTRACT

AI MUST NEVER

- Skip task
- Modify unrelated file
- Continue after task completion
- Execute future sprint

---

# 1. SYSTEM OVERVIEW

Clitoria adalah platform **Digital Commerce berbasis WhatsApp Checkout** untuk produk Butterfly Pea Flower.

Sistem ini bukan marketplace, bukan e-commerce kompleks, dan bukan ERP.

Ini adalah:

> Lightweight Product Catalog + CMS + Manual Sales Tracking System

---

# 2. CORE PRINCIPLE

## 2.1 Business Model

* Visitor tidak checkout di sistem
* Semua transaksi final terjadi via WhatsApp
* Admin mencatat sales secara manual
* Tidak ada payment gateway di MVP

---

## 2.2 Design Philosophy

* Simplicity over complexity
* Manual control over automation
* Content-driven system
* Conversion to WhatsApp, not cart checkout
* Clean modular architecture

---

## 2.3 Engineering Philosophy

* Layered MVC + Service-Repository Architecture
* Service Layer mandatory for business logic
* Repository Layer mandatory for database access
* No business logic in Controller
* Schema-first development (SCHEMA.md is source of truth)
* Design-first UI implementation (DESAIN.md is UI source of truth)

---

# 3. SYSTEM SCOPE

## 3.1 INCLUDED (MVP)

### Public System

* Homepage
* Product listing
* Product detail
* Cart (session-based)
* Buy Now
* WhatsApp checkout redirect

### Admin System

* Authentication
* Dashboard
* Product Management
* Product Pricing
* Gallery Management
* Benefit Management
* Testimonial Management
* Team Management
* Partner Management
* Sales Entry (manual)
* Settings (Business + SEO)

---

## 3.2 EXCLUDED (MVP)

* Orders table
* Customer accounts
* Payment gateway
* Shipping integration
* Inventory system
* Coupon system
* Blog system

---

# 4. ARCHITECTURE RULES

## 4.1 Mandatory Architecture

Every feature MUST follow:

```
Controller → Service → Repository → Model
```

---

## 4.2 Forbidden Patterns

DO NOT:

* Put business logic inside Controller
* Direct DB query in Controller
* Skip Service Layer
* Create “quick hack logic”
* Create tables outside SCHEMA.md
* Modify ERD without updating SCHEMA

---

## 4.3 Logical Module Separation

System is divided logically into modules:

* Auth (Authentication & Authorization)
* CMS (Hero, Benefit, Gallery, Testimonial, Team, Partner)
* Commerce (Product, Product Pricing, Cart, WhatsApp Checkout)
* Analytics (Dashboard, Sales, Reports)
* Settings (Business Settings, SEO Settings)

Each module is separated logically via specific namespaces, Models, Repositories, and Services, maintaining loose coupling.

---

# 5. DATA SOURCE OF TRUTH

## 5.1 Database Rule

All database structure MUST follow:

```
SCHEMA.md → PRIMARY SOURCE OF TRUTH
ERD.dbml → DESIGN REFERENCE ONLY
```

If conflict exists:

> SCHEMA.md wins

---

## 5.2 Naming Rules

* Table: snake_case plural
* Column: snake_case
* Model: PascalCase singular
* Controller: PascalCaseController
* Service: PascalCaseService
* Repository: PascalCaseRepository

---

---
# 5.3 UI SOURCE OF TRUTH

All visual implementation MUST follow:

DESAIN.md

DESAIN.md contains:

- Design System
- Design Tokens
- Component Registry
- Page Structures
- Responsive Rules
- Animation Specifications
- UI Contract

If UI conflict exists:

DESAIN.md wins.

Developers and AI agents are NOT allowed to redesign interfaces unless explicitly instructed.

---

# 6. FEATURE EXECUTION RULE

Every feature MUST follow this lifecycle:

## Step 1
Check PROJECT_CONTEXT.md

## Step 2
Identify current task from TASK_EXECUTION_PLAN.md

## Step 3
Check PROJECT_STRUCTURE.md

## Step 4
Check SCHEMA.md

## Step 5
Check DESAIN.md

## Step 6
Check Acceptance Criteria in DEVELOPMENT_ROADMAP.md

## Step 7
Implement ONLY ONE task

## Step 8
Validate output

## Step 9
Stop and wait for next instruction

---

# 7. UI / UX PRINCIPLE

## 7.1 Public Site

* Conversion-focused design
* WhatsApp CTA is primary action
* Cart is optional helper
* Mobile-first layout
* Minimal friction UX

---

## 7.2 Admin Panel

* Productivity-first UI
* Table-based management
* Card-based CMS modules
* No unnecessary animations
* Fast data entry priority

---

## 7.3 UI Governance

UI implementation MUST follow DESAIN.md.

Do NOT:

- Create new layouts
- Change section ordering
- Modify design tokens
- Introduce new color systems
- Create new responsive rules

Unless explicitly approved.

---

# 8. WHATSAPP CHECKOUT LOGIC

## Core Flow

```
Product → Cart (optional) → WhatsApp Message → External Order Completion
```

System responsibility:

* Generate message
* Format product list
* Calculate total
* Redirect to WhatsApp API link

System does NOT:

* Store order confirmation
* Handle payment

---

# 9. SALES TRACKING LOGIC

Sales are:

* MANUAL input by admin
* Used for analytics only
* Not linked to WhatsApp automatically

Sales schema is:

```
sales (header)
sales_items (detail)
```

Used for:

* Revenue tracking
* Product performance analysis
* Business reporting

---

# 10. PERFORMANCE PRINCIPLES

* Eager loading required for relations
* Avoid N+1 queries
* Optimize image storage
* Use caching for static CMS content
* Pagination mandatory for all lists

---

# 11. SECURITY RULES

* Validate all form inputs using Form Requests
* CSRF protection required
* File upload validation required
* No direct request data in models
* Auth middleware required for admin routes

---

# 12. AGENT EXECUTION RULE

If AI is acting as coding agent:

## MUST DO

* Follow TASK_EXECUTION_PLAN.md
* Implement ONE feature at a time
* Respect SCHEMA.md strictly
* Read DESAIN.md before implementing UI
* Follow Component Registry
* Follow UI Contract
* Follow Responsive Rules

## MUST NOT DO

* Do not jump between modules
* Do not refactor unrelated modules
* Do not create new architecture without approval
* Do not redesign existing screens
* Do not invent new UI patterns
* Do not modify Design System

---

# 13. DEFINITION OF DONE

A task is COMPLETE only if:

* Migration matches SCHEMA.md
* Service layer exists (if needed)
* Controller is clean (no business logic)
* Feature works end-to-end
* No violation of architecture rules

---

# 14. FUTURE SCALABILITY RULE

System is designed to evolve into:

Phase 2:

* Order system
* Customer system

Phase 3:

* Payment gateway
* Inventory system

BUT:

MVP MUST NOT PREPARE TABLES FOR FUTURE FEATURES prematurely.

---

# 15. FINAL PRINCIPLE

> “Build only what is needed for current business flow. Not what might be needed later.”
