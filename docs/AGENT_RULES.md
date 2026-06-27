# AGENT_RULES.md

# Clitoria Digital Commerce Platform

## AI Coding Agent Operating Rules

Version: 2.0

---

# TASK VERIFICATION RULE

Before marking a task as completed, Agent MUST verify:

1. Task output matches TASK_EXECUTION_PLAN.md
2. Database changes match SCHEMA.md
3. UI matches DESAIN.md
4. Architecture matches PROJECT_STRUCTURE.md
5. Acceptance Criteria pass

If any verification fails:

DO NOT mark task as completed.

---

# FILE CREATION RULE

Agent MUST NOT create new files unless:

- Required by current task
- Required by Laravel convention
- Defined in PROJECT_STRUCTURE.md

Do not invent helper classes, manager classes, processor classes, utility classes, or custom architectures.

---

# CURRENT SPRINT RULE

CURRENT_SPRINT.md is the operational source of truth.

Agent MUST:

1. Read CURRENT_SPRINT.md first
2. Execute only the Current Task defined inside it
3. Run validations and testing
4. Update the project status documents (see DOCUMENTATION UPDATE RULE)
5. Report completion
6. Stop

Agent MUST NOT execute the Next Task automatically.

---

# DOCUMENTATION UPDATE RULE

Upon completing a task, the developer/agent MUST manually update the following status documents before committing:

1.  **`docs/CURRENT_SPRINT.md`** *(Manual update)*: Update the `PREVIOUS TASK` with the completed task deliverables. Update the `CURRENT TASK`, `CURRENT TASK OBJECTIVE`, `ACCEPTANCE CRITERIA`, and `NEXT TASK` sections to match the next scheduled task from `docs/TASK_EXECUTION_PLAN.md`.
2.  **`docs/PROJECT_STATUS.md`** *(Manual update)*: Add the completed task ID and name under the correct Epic section.
3.  **`docs/CHANGELOG.md`**: Insert a new chronological entry at the top of the file using the template, listing what was Added, Changed, and Verified.

---

# TASK LOOP PROTOCOL

After task completion:

1. Validate task output (unit tests, manual checks)
2. Update `docs/CURRENT_SPRINT.md`, `docs/PROJECT_STATUS.md`, and `docs/CHANGELOG.md`
3. Report completed files and next task
4. STOP and wait for next instruction

Never execute the next task automatically in the same run.

---

# 1. PURPOSE

This document defines the mandatory operating procedures for any AI coding agent working on the Clitoria Digital Commerce Platform.

The objective is to ensure:

* Predictable execution
* Consistent architecture
* Zero scope drift
* Zero unauthorized redesign
* Safe incremental implementation

---

# 2. PROJECT HIERARCHY

When conflicts occur, use the following priority order:

```text
1. USER INSTRUCTION
2. AGENT_RULES.md
3. CURRENT_SPRINT.md
4. PROJECT_CONTEXT.md
5. TASK_EXECUTION_PLAN.md
6. SCHEMA.md
7. DESAIN.md
8. PROJECT_STRUCTURE.md
9. SRS.md
10. PRD.md
```

---

# 3. MANDATORY READING ORDER

Before implementing ANY task, read:

```text
STEP 1 → CURRENT_SPRINT.md
STEP 2 → PROJECT_CONTEXT.md
STEP 3 → TASK_EXECUTION_PLAN.md
STEP 4 → SCHEMA.md
STEP 5 → PROJECT_STRUCTURE.md
STEP 6 → DESAIN.md
STEP 7 → Execute task
```

Skipping any document is prohibited.

---

# 4. SINGLE TASK EXECUTION RULE

Agent may execute:

```text
ONE TASK ONLY
```

per execution cycle.

---

# 5. UI IMPLEMENTATION RULES

DESAIN.md is the UI source of truth.

Agent MUST:

* Follow design tokens
* Follow spacing system
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
* Service Layer
* Domain Isolation

Forbidden:

* Business logic in Controller
* Direct DB queries in Controller
* Fat Blade Templates
* Quick fixes outside architecture

---

# 8. DOMAIN BOUNDARY RULE

The project uses Domain-Oriented Modular Monolith architecture.

Domains:

```text
Auth
CMS
Commerce
Analytics
Settings
```

Agent MUST NOT:

* Mix domain responsibilities
* Access another domain directly
* Create cross-domain shortcuts

Use services or repositories when integration is required.

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
* Optimize image loading
* Avoid N+1 queries

Never:

* Load large datasets without pagination

---

# 14. SECURITY RULES

Mandatory:

* CSRF protection
* Authorization middleware
* Input validation
* Upload validation

Forbidden:

* Raw request injection
* Unvalidated uploads
* Unprotected admin routes

---

# 15. DEFINITION OF DONE

A task is complete only when:

* Acceptance criteria pass
* Architecture rules respected
* SCHEMA.md respected
* DESAIN.md respected
* Documentation status files (`CURRENT_SPRINT.md`, `PROJECT_STATUS.md`, `CHANGELOG.md`) updated
* No unrelated files modified
* No known errors remain

---

# 16. OUTPUT FORMAT

After every task execution, report:

```text
TASK COMPLETED:
[Task ID]

ACCEPTANCE CRITERIA:
✅ Passed

FILES CREATED:
...

FILES MODIFIED:
...

CURRENT TASK STATUS:
Completed

NEXT TASK:
...

DOCUMENTATION STATUS:
✅ CURRENT_SPRINT.md updated
✅ PROJECT_STATUS.md updated
✅ CHANGELOG.md updated

STOPPED WAITING FOR INSTRUCTION
```

---

# TASK FAILURE PROTOCOL

If blocked:

1. Explain blocker
2. Explain affected files
3. Explain missing information
4. Suggest resolution
5. STOP

Do not make assumptions.
Do not continue implementation.

---

## Alternative Output (Task Blocked)

If task cannot be completed, report:

```text
TASK BLOCKED:
[Task ID]

CURRENT TASK STATUS:
Blocked

BLOCKER:
...

AFFECTED FILES:
...

REQUIRED INFORMATION:
...

SUGGESTED RESOLUTION:
...

STOPPED WAITING FOR INSTRUCTION
```

---

# DEFINITION OF READY

A task may start only if:

- Current Task exists in CURRENT_SPRINT.md
- Task exists in TASK_EXECUTION_PLAN.md
- Required schema exists in SCHEMA.md
- Required UI exists in DESAIN.md (if UI task)
- Dependencies are completed

---

# 17. FINAL PRINCIPLE

```text
Do exactly what the current task requires.

Do not anticipate future tasks.

Do not redesign approved solutions.

Do not expand scope.

Complete.
Validate.
Stop.
```
