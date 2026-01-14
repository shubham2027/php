## PHP Practice Playground

Hands-on PHP snippets and small exercises for syntax basics, OOP features, form handling, file upload/email trials, sessions/cookies, error handling, and MySQL CRUD patterns.

### What’s inside
- BACK END ETP – login form with regex validation for username/password rules.
- OOPs – class/object basics, constructors/destructors, access modifiers, interfaces, traits, inheritance (single, multilevel), and simple overloading demos.
- php – grab-bag of fundamentals: variables/types, math/date helpers, strings/arrays, anonymous/arrow functions, recursion (factorial/prime/fibonacci), regex matching, cookies/sessions, includes, calculator/form GET/POST demos, pattern checks, and array utilities.
- php/activitys – dice roll game, student grade calculator, upload gallery with type/size guards, sanitized form input, cookie/email tasks, and simple image upload forms.
- php/Error – custom error handlers, `die`/`trigger_error` use, and a basic try/catch example.
- php/form – small form exercises: survey, arithmetic form, password strength check, hello response, and starter registration validation stub.
- php/simplified – “FolioForge” Tailwind demo page with a portfolio form and dynamic skills via JS.
- php/email – mail() send samples plus file upload handling (note: directory listing file is empty).
- PHP MYSQL – mysqli connection helpers; create DB/table scripts; CRUD/select/order/group/aggregate/LIMIT/LIMIT/LIKE queries; update/delete; and `activity12.php` mini library app (books/members/issues/returns with transactions). Update credentials in each script before running.
- practice – extra mini-apps: cookie demo, simple DB CRUD with HTML table, product search list, quiz, registration validation, inheritance example, DB table view, and a session login/main flow.

### Run the snippets
From the repo root, start PHP’s built-in server and browse to the file you want to try:

```bash
php -S localhost:8000
```

### MySQL notes
- Ensure MySQL is running and set credentials per script (common defaults in `root`/blank).
- Several scripts target the `newdatabase`, `student`, `test`, `library_management`, or `school_managment` schemas; create them or adjust names as needed.
