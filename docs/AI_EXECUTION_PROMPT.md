# AI EXECUTION PROMPT

This document serves as the execution blueprint for AI coding agents.

---

# CONSTRAINTS

* Read all system instructions
* Execute ONLY ONE task at a time
* Keep documentation updated
* Respect file ownership

Identify the current task ONLY from:

CURRENT_SPRINT.md

Never assume the current task.

Never execute tasks not listed as Current Task.

---

# EXECUTION REQUIREMENTS

Follow all rules defined in:

* AGENT_RULES.md
* PROJECT_CONTEXT.md
* PROJECT_STRUCTURE.md
* SCHEMA.md
* DESAIN.md

Mandatory:

* Single Task Execution
* Module Separation Compliance
* Architecture Compliance
* Design Compliance
* Schema Compliance

---

# ARCHITECTURE REQUIREMENTS

Must follow:

Controller
→ Service
→ Repository
→ Model

Mandatory:

* Form Requests
* Service Layer (Business Logic & File Handling)
* Repository Layer (Database Access via Interfaces)
* Loose Coupling between Modules

Forbidden:

* Business logic in Controller
* Direct database queries in Controller
* Quick hacks
* Scope expansion
* Unauthorized refactoring

---

# DATABASE REQUIREMENTS

SCHEMA.md is the database source of truth.

Agent must:

* Match schema exactly
* Respect relationships
* Respect indexes
* Respect foreign keys

Agent must never guess database structure.

---

# OUTPUT EXPECTATIONS

Upon task completion, AI agent MUST:

1. Validate syntax (`php -l`)
2. Verify implementation matches task requirements
3. Update `docs/PROJECT_STATUS.md`
4. Update `docs/CHANGELOG.md`
5. Report completion with clear summary and next step instructions
