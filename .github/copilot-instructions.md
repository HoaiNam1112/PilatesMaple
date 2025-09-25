# Copilot Instructions for PilatesMaple

## Project Overview
PilatesMaple is a PHP-based web application for managing a Pilates studio, including user authentication, admin dashboard, trainer management, and contact/registration forms. The codebase is organized by feature and role, with clear separation between admin, manager, and public-facing pages.

## Architecture & Key Components
- **Admin/**: Admin dashboard and management pages (content, courses, schedule, trainers, forms, users). Uses Bootstrap for UI.
- **manager/**: User authentication (login, register, logout) and session management. Connects to MySQL via `page/connect.php`.
- **page/**: Shared components (header, footer), database connection, and public pages (trainer info, contact, etc.).
- **css/**: Custom styles for login, register, and contact pages.
- **pic/**: Static images for branding and content.

## Data Flow & Integration
- All PHP pages requiring database access include `page/connect.php` for MySQL connection.
- User sessions are managed via PHP's `session_start()`, with role-based redirects (admin vs. user).
- Forms (login, register, contact) POST to their respective PHP handlers for validation and DB operations.
- Admin dashboard links to CRUD management pages (not all are present in the workspace).

## Developer Workflows
- **No build step required**: Directly edit PHP, HTML, CSS files. Changes are reflected immediately.
- **Database**: Assumes a local MySQL server with database `btl_pilates` and user `root` (no password by default).
- **Debugging**: Use browser dev tools and PHP error output. No automated tests or CI/CD present.
- **Session/Role Management**: Check session variables (`$_SESSION['role']`, `$_SESSION['admin_logged_in']`) for access control.

## Project-Specific Conventions
- **File Inclusion**: Use relative paths for includes (e.g., `include('../page/connect.php')`).
- **Styling**: Custom CSS for forms; Bootstrap for admin UI.
- **Language**: Vietnamese for UI labels and comments.
- **Security**: SQL queries use string interpolation (no prepared statements); be cautious of SQL injection risks.
- **Error Handling**: User-facing errors are displayed inline in forms; fatal DB errors use `die()`.

## Patterns & Examples
- **Login/Registration**: See `manager/login.php` and `manager/register.php` for form handling and session logic.
- **Admin Dashboard**: See `Admin/dashboard.php` for navigation and role-based access.
- **Shared Layout**: `page/header.php` and `page/footer.php` are included in most pages for consistent UI.
- **Database Connection**: Always use `require('connect.php')` before DB operations.

## External Dependencies
- **Bootstrap**: Used via CDN in admin and some public pages.
- **FontAwesome**: Used for icons in contact page.

## Recommendations for AI Agents
- Always check for required includes (`connect.php`, `header.php`, `footer.php`) when creating new pages.
- Maintain Vietnamese language for UI and comments unless otherwise specified.
- Follow existing session and role management patterns for access control.
- Reference existing form and CRUD patterns for new features.
- Be aware of direct SQL queries and potential security issues.

---

_If any section is unclear or missing, please provide feedback to improve these instructions._
