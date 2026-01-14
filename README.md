## PHP Practice Playground

Collection of PHP practice snippets and class exercises covering core syntax, OOP features, basic forms, sessions/cookies, and MySQL CRUD samples.

### Directory highlights
- `php/` – fundamentals: arrays, strings, sessions/cookies, forms, includes.
- `OOPs/` – classes, inheritance, traits, abstract classes, overloading demos.
- `PHP MYSQL/` – connection helpers and CRUD scripts (`insert`, `select`, `update`, `delete`, `groupBy`, `orderBy`).
- `BACK END ETP/` – simple form handling example.
- `practice/` – assorted practice scripts (forms, table outputs, simple e-commerce mock, login session flow).
- `php/email/` – file and email handling samples; includes upload demo.

### Run the snippets
Use the built-in PHP server from the repo root, then open the target script in the browser.

```bash
php -S localhost:8000
```

Example: visit `http://localhost:8000/php/form/form_validation.php` or any other file path you want to test.

### MySQL samples
The `PHP MYSQL/` scripts assume a running MySQL instance and appropriate credentials inside the connection helper (edit `PHP MYSQL/connection_mysql.php`).

### Contributing / notes
- Files are independent exercises; there is no single app entrypoint.
- When adding new demos, keep dependencies minimal and note any required database/schema setup in comments.
