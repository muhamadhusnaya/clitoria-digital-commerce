# AGENT_RULES.md - v2.0

# Clitoria AI Agent Execution Rules

This document defines strict operational rules for AI coding agents.

---

# 1. CORE MISSION

AI agent must focus ONLY on:

* Current task defined in `docs/CURRENT_SPRINT.md`
* Keeping documentation in sync

---

# 2. CONTEXT AWARENESS

Before starting, agent must read:

* `docs/CURRENT_SPRINT.md`
* `docs/PROJECT_CONTEXT.md`
* `docs/PROJECT_STRUCTURE.md`
* `docs/SCHEMA.md`

Agent must verify the task's validity against `docs/TASK_EXECUTION_PLAN.md`.

---

# 3. TASK BOUNDARY RULE

Agent is allowed to:

* Implement ONLY the current task
* Create/modify files required by the current task
* Modify the tracking files:
  - `docs/PROJECT_STATUS.md`
  - `docs/CHANGELOG.md`
  - `docs/CURRENT_SPRINT.md`

Agent MUST NOT:

* Modify unrelated files
* Create speculative code
* Implement future features
* Refactor code outside the scope of the current task

---

# 4. CODE STYLE & INTEGRITY

Agent must follow:

* Keep existing code structure
* Preserve all comments
* Preserve all docstrings
* Use standard Laravel 12 features
* Implement error handling
* Write clean, readable code

---

# 5. UI DESIGN RULES

UI implementation must follow `docs/DESAIN.md`.

Agent MUST:

* Use Tailwind CSS variables
* Follow typography scale
* Follow responsive rules
* Follow page structures
* Follow component registry
* Follow UI contract

Agent MUST NOT:

* Create new layouts
* Change page hierarchy
* Change component behavior
* Change color palette
* Change responsive breakpoints
* Introduce new design patterns

unless explicitly instructed.

---

# 6. DATABASE RULES

SCHEMA.md is the database source of truth.

Agent MUST NOT:

* Create tables not defined in SCHEMA.md
* Add columns not defined in SCHEMA.md
* Remove columns without approval
* Rename tables without approval

If schema conflict exists:

```text
SCHEMA.md wins
```

---

# 7. ARCHITECTURE RULES

Every implementation must follow:

```text
Controller
↓
Service
↓
Repository
↓
Model
```

Mandatory:

* Form Requests
* Service Layer (Business Logic & File Handling)
* Repository Layer (Database Access / Eloquent Queries)
* Separation of Concerns

Forbidden:

* Business logic in Controller
* Direct DB queries in Controller
* Fat Blade Templates
* Quick fixes outside architecture

---

# 8. MODULE DEPENDENCY RULE

The project uses Standard Laravel MVC + Service-Repository architecture with logical module grouping:

```text
Auth
CMS
Commerce
Analytics
Settings
```

Agent MUST NOT:

* Allow direct cross-module database querying using unrelated Models in Services (e.g. `ProductService` querying `Testimonial` model directly).
* Bypass the Repository layer when accessing other modules' data. If module integration is needed, use the target module's Service or Repository Interface.

---

# 9. FILE MODIFICATION RULE

Only modify files directly related to the current task and the documentation status files.

Forbidden:

* Unrelated refactoring
* Renaming unrelated files
* Reorganizing project structure
* Updating multiple modules

---

# 10. UI COMPONENT RULE

Before creating a component:

Verify whether it already exists in DESAIN.md.

If component exists:

```text
REUSE
```

Do not duplicate components.

---

# 11. MIGRATION RULE

Every migration must:

* Match SCHEMA.md exactly
* Include proper indexes
* Include foreign keys
* Follow naming conventions

Agent must never guess database fields.

---

# 12. VALIDATION RULE

Every form must use:

```text
Form Request Validation
```

Do not place validation inside controllers.

---

# 13. PERFORMANCE RULES

Always:

* Use eager loading
* Paginate admin tables
* Optimize image sizes
* Index query filters

---

# 14. DOCUMENTATION SYNC RULE

Every task completion must:

* Update `docs/PROJECT_STATUS.md` (move completed task to completed section)
* Update `docs/CHANGELOG.md` (add changes under task ID)
* Propose the next task for `docs/CURRENT_SPRINT.md`

---

# 15. COMMUNICATION STYLE

* Keep descriptions concise
* Be direct and clear
* Do not make assumptions
* Raise questions immediately if conflict is found
