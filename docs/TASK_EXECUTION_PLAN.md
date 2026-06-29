# TASK_EXECUTION_PLAN.md

# Clitoria Digital Commerce Platform — Implementation Roadmap

Version: 5.0

---

# PURPOSE

This document is the single source of truth for the implementation roadmap and team task assignments.

Every implementation task executed by AI or developers MUST originate from this document.

This document is STATIC. It defines execution order and assignments only.

### 👥 TEAM ROLES REFERENCE:

*   **Dev 1 (Husnaya):** DevOps / DBA / Security (Setup, Core Auth, QA Testing, Server Deployment)
    *   *Sifat Kerja:* **WAJIB TERURUT (Sequential).** Harus menyelesaikan fondasi proyek dan integrasi backend sebelum modul lain dapat diselesaikan.
*   **Dev 2 (Tyas):** Backend A (CMS Modules, Settings Domain, SEO Backend)
    *   *Sifat Kerja:* **SEMI-PARALEL.** Harus mengerjakan tugas backend secara berurutan, namun bisa berjalan bersamaan dengan Dev 3 karena domain modul berbeda (CMS vs Commerce).
*   **Dev 3 (Arum):** Backend B (Commerce Domain, Sales Tracking Backend, Analytics Reports)
    *   *Sifat Kerja:* **SEMI-PARALEL.** Harus mengerjakan tugas backend secara berurutan, namun bisa berjalan bersamaan dengan Dev 2 karena domain modul berbeda (Commerce vs CMS).
*   **Dev 4 (Alwi):** Frontend A (Design System, Reusable Admin Components, Admin Views/CRUD UI)
    *   *Sifat Kerja:* **BOLEH PARALEL.** Bisa mencicil pembuatan komponen dan layout UI Admin kapan saja menggunakan teknik *mocking data* mengacu pada `docs/SCHEMA.md` & `docs/DESAIN.md`.
*   **Dev 5 (Cynthia):** Frontend B (Public Layouts, Catalog/Detail UI, Cart & WA Checkout UI)
    *   *Sifat Kerja:* **BOLEH PARALEL.** Bisa mencicil pembuatan layout publik dan halaman katalog kapan saja menggunakan teknik *mocking data* mengacu pada `docs/SCHEMA.md` & `docs/DESAIN.md`.

---

# EXECUTION RULES

1. Execute ONE task only.
2. Never implement future tasks.
3. Never redesign UI.
4. Never modify database outside SCHEMA.md.
5. Never violate architecture.
6. Commit changes before starting another task.
7. Stop after validation.

---

# TASK COMPLETION REQUIREMENTS

A task is considered COMPLETE only if:

- Code implemented
- Architecture validated
- Tests passed
- Manual verification passed
- Git committed
- CURRENT_SPRINT.md updated
- PROJECT_STATUS.md updated
- CHANGELOG.md updated

---

# EPIC 01 — FOUNDATION

Goal: Prepare Laravel project architecture.

---

## FEATURE 01.01 — Laravel Initialization

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 1 | 01.01.01 | Initialize Laravel Project | Dev 1 |
| 2 | 01.01.02 | Configure Environment | Dev 1 |
| 3 | 01.01.03 | Configure Database | Dev 1 |
| 4 | 01.01.04 | Configure Storage | Dev 1 |
| 5 | 01.01.05 | Configure Vite | Dev 1 |

---

## FEATURE 01.02 — Frontend Foundation

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 6 | 01.02.01 | Install Tailwind CSS | Dev 4 |
| 7 | 01.02.02 | Install AlpineJS | Dev 4 |
| 8 | 01.02.03 | Configure Frontend Build Pipeline | Dev 1 |

---

## FEATURE 01.03 — Architecture Foundation

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 9 | 01.03.01 | Create Repository-Service Structure | Dev 1 |
| 10 | 01.03.02 | Create Base Service Layer | Dev 1 |
| 11 | 01.03.03 | Create Base Repository Layer | Dev 1 |
| 12 | 01.03.04 | Configure Route Structure | Dev 1 |
| 13 | 01.03.05 | Configure Shared Helpers | Dev 1 |

---

# EPIC 02 — UI FOUNDATION

Goal: Implement design system and reusable components.

---

## FEATURE 02.01 — Design System

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 14 | 02.01.01 | Implement Design Tokens | Dev 4 |
| 15 | 02.01.02 | Implement Typography | Dev 4 |
| 16 | 02.01.03 | Implement Color System | Dev 4 |
| 17 | 02.01.04 | Implement Spacing System | Dev 4 |
| 18 | 02.01.05 | Implement Responsive Breakpoints | Dev 4 |

---

## FEATURE 02.02 — Shared Components

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 19 | 02.02.01 | Button Component | Dev 4 |
| 20 | 02.02.02 | Input Component | Dev 4 |
| 21 | 02.02.03 | Textarea Component | Dev 4 |
| 22 | 02.02.04 | Select Component | Dev 4 |
| 23 | 02.02.05 | Badge Component | Dev 4 |
| 24 | 02.02.06 | Alert Component | Dev 4 |
| 25 | 02.02.07 | Card Component | Dev 4 |
| 26 | 02.02.08 | Table Component | Dev 4 |
| 27 | 02.02.09 | Modal Component | Dev 4 |
| 28 | 02.02.10 | Pagination Component | Dev 4 |

---

## FEATURE 02.03 — Public Layout

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 29 | 02.03.01 | Public Master Layout | Dev 5 |
| 30 | 02.03.02 | Public Header | Dev 5 |
| 31 | 02.03.03 | Navigation | Dev 5 |
| 32 | 02.03.04 | Footer | Dev 5 |
| 33 | 02.03.05 | WhatsApp CTA | Dev 5 |

---

## FEATURE 02.04 — Admin Layout

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 34 | 02.04.01 | Admin Layout | Dev 4 |
| 35 | 02.04.02 | Sidebar | Dev 4 |
| 36 | 02.04.03 | Topbar | Dev 4 |
| 37 | 02.04.04 | Breadcrumb | Dev 4 |
| 38 | 02.04.05 | Flash Message | Dev 4 |
| 39 | 02.04.06 | Admin Modal | Dev 4 |

---

# EPIC 03 — AUTHENTICATION

Goal: Secure administrator access.

---

## FEATURE 03.01 — Admin Authentication

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 40 | 03.01.01 | Install & Configure Laravel Breeze | Dev 1 |
| 41 | 03.01.02 | Customize Login UI | Dev 4 |
| 42 | 03.01.03 | Configure Forgot Password | Dev 1 |
| 43 | 03.01.04 | Configure Email Verification | Dev 1 |
| 44 | 03.01.05 | Profile Management | Dev 1 |

---

# EPIC 04 — CMS

Goal: Admin can manage all website content.

---

## FEATURE 04.01 — Hero Management

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 45 | 04.01.01 | Hero Migration | Dev 2 |
| 46 | 04.01.02 | Hero Model | Dev 2 |
| 47 | 04.01.03 | Hero Repository | Dev 2 |
| 48 | 04.01.04 | Hero Service | Dev 2 |
| 49 | 04.01.05 | Hero CRUD UI | Dev 4 |
| 50 | 04.01.06 | Hero Image Upload | Dev 2 |

---

## FEATURE 04.02 — Benefit Management

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 51 | 04.02.01 | Benefit Migration | Dev 2 |
| 52 | 04.02.02 | Benefit Model | Dev 2 |
| 53 | 04.02.03 | Benefit Repository | Dev 2 |
| 54 | 04.02.04 | Benefit Service | Dev 2 |
| 55 | 04.02.05 | Benefit CRUD UI | Dev 4 |
| 56 | 04.02.06 | Benefit Ordering | Dev 2 |

---

## FEATURE 04.03 — Gallery Management

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 57 | 04.03.01 | Gallery Migration | Dev 2 |
| 58 | 04.03.02 | Gallery Model | Dev 2 |
| 59 | 04.03.03 | Gallery Repository | Dev 2 |
| 60 | 04.03.04 | Gallery Service | Dev 2 |
| 61 | 04.03.05 | Gallery CRUD UI | Dev 4 |
| 62 | 04.03.06 | Gallery Upload | Dev 2 |
| 63 | 04.03.07 | Gallery Preview | Dev 4 |

---

## FEATURE 04.04 — Testimonial Management

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 64 | 04.04.01 | Testimonial Migration | Dev 2 |
| 65 | 04.04.02 | Testimonial Model | Dev 2 |
| 66 | 04.04.03 | Testimonial Repository | Dev 2 |
| 67 | 04.04.04 | Testimonial Service | Dev 2 |
| 68 | 04.04.05 | Testimonial CRUD UI | Dev 4 |
| 69 | 04.04.06 | Featured Testimonial | Dev 2 |

---

## FEATURE 04.05 — Team Management

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 70 | 04.05.01 | Team Migration | Dev 2 |
| 71 | 04.05.02 | Team Model | Dev 2 |
| 72 | 04.05.03 | Team Repository | Dev 2 |
| 73 | 04.05.04 | Team Service | Dev 2 |
| 74 | 04.05.05 | Team CRUD UI | Dev 4 |

---

## FEATURE 04.06 — Partner Management

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 75 | 04.06.01 | Partner Migration | Dev 2 |
| 76 | 04.06.02 | Partner Model | Dev 2 |
| 77 | 04.06.03 | Partner Repository | Dev 2 |
| 78 | 04.06.04 | Partner Service | Dev 2 |
| 79 | 04.06.05 | Partner CRUD UI | Dev 4 |

---

# EPIC 05 — COMMERCE

Goal: Visitor can browse products and checkout via WhatsApp.

---

## FEATURE 05.01 — Product Management

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 80 | 05.01.01 | Product Migration | Dev 3 |
| 81 | 05.01.02 | Product Model | Dev 3 |
| 82 | 05.01.03 | Product Repository | Dev 3 |
| 83 | 05.01.04 | Product Service | Dev 3 |
| 84 | 05.01.05 | Product CRUD UI | Dev 4 |
| 85 | 05.01.06 | Product Image Upload | Dev 3 |

---

## FEATURE 05.02 — Product Pricing

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 86 | 05.02.01 | Product Price Migration | Dev 3 |
| 87 | 05.02.02 | Product Price CRUD | Dev 3 |
| 88 | 05.02.03 | Variant Support | Dev 3 |
| 89 | 05.02.04 | Price Calculation | Dev 3 |

---

## FEATURE 05.03 — Product Catalog

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 90 | 05.03.01 | Product Listing Page | Dev 5 |
| 91 | 05.03.02 | Product Detail Page | Dev 5 |
| 92 | 05.03.03 | Product Filtering | Dev 5 |
| 93 | 05.03.04 | Product Search | Dev 5 |

---

## FEATURE 05.04 — Shopping Cart

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 94 | 05.04.01 | Session Cart Service | Dev 3 |
| 95 | 05.04.02 | Add To Cart | Dev 5 |
| 96 | 05.04.03 | Remove Item | Dev 5 |
| 97 | 05.04.04 | Update Quantity | Dev 5 |
| 98 | 05.04.05 | Cart Summary | Dev 3 |

---

## FEATURE 05.05 — WhatsApp Checkout

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 99 | 05.05.01 | WhatsApp Message Generator | Dev 3 |
| 100 | 05.05.02 | Cart Checkout | Dev 5 |
| 101 | 05.05.03 | Buy Now Checkout | Dev 5 |
| 102 | 05.05.04 | Dynamic WhatsApp Redirect | Dev 5 |

---

# EPIC 06 — ANALYTICS

Goal: Admin can record and analyze sales.

---

## FEATURE 06.01 — Sales Tracking

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 103 | 06.01.01 | Sales Migration | Dev 3 |
| 104 | 06.01.02 | Sales Item Migration | Dev 3 |
| 105 | 06.01.03 | Sales Repository | Dev 3 |
| 106 | 06.01.04 | Sales Service | Dev 3 |
| 107 | 06.01.05 | Sales Entry UI | Dev 4 |
| 108 | 06.01.06 | Sales Detail View | Dev 4 |

---

## FEATURE 06.02 — Dashboard Analytics

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 109 | 06.02.01 | KPI Cards | Dev 4 |
| 110 | 06.02.02 | Revenue Metrics | Dev 3 |
| 111 | 06.02.03 | Sales Metrics | Dev 3 |
| 112 | 06.02.04 | Product Ranking | Dev 3 |
| 113 | 06.02.05 | Recent Sales Widget | Dev 4 |

---

## FEATURE 06.03 — Reporting

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 114 | 06.03.01 | Daily Report | Dev 3 |
| 115 | 06.03.02 | Monthly Report | Dev 3 |
| 116 | 06.03.03 | Revenue Summary | Dev 3 |
| 117 | 06.03.04 | Product Performance | Dev 3 |

---

# EPIC 07 — SETTINGS

Goal: All business configuration manageable without coding.

---

## FEATURE 07.01 — Business Settings

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 118 | 07.01.01 | Settings Migration | Dev 2 |
| 119 | 07.01.02 | Settings Repository | Dev 2 |
| 120 | 07.01.03 | Settings Service | Dev 2 |
| 121 | 07.01.04 | Business Settings Backend | Dev 2 |
| 122 | 07.01.05 | Business Settings CRUD UI | Dev 4 |

---

## FEATURE 07.02 — SEO Settings

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 123 | 07.02.01 | SEO Settings Backend | Dev 2 |
| 124 | 07.02.02 | SEO Settings CRUD UI | Dev 4 |

---

## FEATURE 07.03 — Dynamic SEO Rendering

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 125 | 07.03.01 | SEO Frontend Implementation | Dev 2 |

---

# EPIC 08 — DEPLOYMENT

Goal: Application ready for production environment.

---

## FEATURE 08.01 — System Testing

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 126 | 08.01.01 | Authentication Testing | Dev 1 |
| 127 | 08.01.02 | CMS Testing | Dev 1 |
| 128 | 08.01.03 | Product Testing | Dev 1 |
| 129 | 08.01.04 | Cart Testing | Dev 1 |
| 130 | 08.01.05 | Checkout Testing | Dev 1 |
| 131 | 08.01.06 | Sales Testing | Dev 1 |

---

## FEATURE 08.02 — Performance Optimization

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 132 | 08.02.01 | Query Optimization | Dev 1 |
| 133 | 08.02.02 | Eager Loading Audit | Dev 1 |
| 134 | 08.02.03 | Image Optimization | Dev 1 |
| 135 | 08.02.04 | Lazy Loading | Dev 1 |
| 136 | 08.02.05 | Caching Strategy | Dev 1 |

---

## FEATURE 08.03 — Security Hardening

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 137 | 08.03.01 | CSRF Validation | Dev 1 |
| 138 | 08.03.02 | XSS Protection | Dev 1 |
| 139 | 08.03.03 | Authorization Review | Dev 1 |
| 140 | 08.03.04 | Upload Validation | Dev 1 |

---

## FEATURE 08.04 — Production Deployment

| Order | Task | Description | Assignee |
|-------|------|-------------|----------|
| 141 | 08.04.01 | VPS Setup | Dev 1 |
| 142 | 08.04.02 | Environment Setup | Dev 1 |
| 143 | 08.04.03 | Database Migration | Dev 1 |
| 144 | 08.04.04 | Storage Link | Dev 1 |
| 145 | 08.04.05 | SSL Configuration | Dev 1 |
| 146 | 08.04.06 | Backup Strategy | Dev 1 |

---

# END OF ROADMAP