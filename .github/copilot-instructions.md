# AI Coding Assistant Instructions for ASTSubSys

## Project Overview
ASTSubSys is a Laravel 12 application serving as an admin subsystem. It uses the Ace Admin template for UI components and Tailwind CSS v4 for custom styling.

## Architecture
- **Backend**: Laravel 12 with standard MVC structure (routes in `routes/web.php`, controllers in `app/Http/Controllers/`, models in `app/Models/`)
- **Frontend**: Vite for asset bundling, Tailwind CSS v4 for styling, Axios for HTTP requests
- **UI Template**: Ace Admin (Bootstrap-based) assets served from `public/ace-admin-master/`
- **Database**: Standard Laravel migrations in `database/migrations/`, uses jobs/queues for background processing

## Development Workflow
- **Setup**: Run `composer run setup` to initialize environment, generate key, migrate DB, and install/build dependencies
- **Development**: Use `composer run dev` for concurrent development servers (Laravel, queue listener, log viewer, Vite dev server)
- **Build**: `npm run build` for production assets
- **Testing**: `composer run test` to run PHPUnit tests with config cache clearing

## Key Conventions
- **Views**: Place admin views in `resources/views/main/` directory, reference as `view('main.viewname')`
- **Assets**: Link Ace Admin assets with `{{ asset('ace-admin-master/assets/css/bootstrap.min.css') }}`
- **Custom CSS/JS**: Add to `resources/css/app.css` (Tailwind v4 syntax) and `resources/js/app.js`, built via Vite
- **Controllers**: Extend base `Controller` class in `app/Http/Controllers/`
- **Models**: Use standard Eloquent models with factories in `database/factories/`
- **Queues**: Background jobs use Laravel's queue system; listener runs in dev mode

## Examples
- **Adding a new admin page**: Create `resources/views/main/newpage.blade.php`, add route in `routes/web.php`, return `view('main.newpage')`
- **Custom styling**: Use Tailwind classes in Blade templates or add to `resources/css/app.css` with `@theme` directives
- **AJAX requests**: Use Axios from `resources/js/app.js` with `window.axios` for API calls

## Notes
- Project is in early stages with minimal custom code; follow Laravel best practices for expansions
- Ace Admin provides pre-built components; customize via overriding CSS or extending templates
- Ensure Vite builds are run before production deployment</content>
<parameter name="filePath">c:\xampp\htdocs\ASTSubSys\.github\copilot-instructions.md