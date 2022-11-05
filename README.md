# Requirements

1. Laravel 9.x requires a minimum PHP version of **8.0**.
2. You should have **NodeJS** which is compatible with Vite

# Installation

1. `composer i`
2. `npm i`
3. Rename `.env.sample` to `.env`
4. You should create a Mysql or Mariadb database in your local. Then You should set up the database credentials/info in `.env` file.

Like:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task
DB_USERNAME=root
DB_PASSWORD=
```

5. Run `php artisan migrate` to create tasks table in the db.
6. Run `npm run build` to build your Bootstrap 5, JavaScript and CSS files. _(Ignore Sass files warnings)_
7. If you have already LAMP stack, run it in the browser or `php artisan serve`, then run it in the browser.

# About test project

I was given the task of developing a small project that is a To-do app. I should
demonstrate the following abilities/skills: make models, controllers, migrations, HTML, CSS, blade, Git commits, blade
templates, etc.

### Front-end

> After forking the app from  https://github.com/MarketingLoungePartnership/to-do-list I realised that
it is Laravel 9 app. For this reason, I made a couple of changes to use Vite properly with SASS and **Bootstrap 5 CSS**

- resources -> sass -> pages: This folder consists of sass file of the app.
- view: All page templates of the project is inside this folder.

I completed the given task. You can see the screenshot below from my task:

![Alt text](assets/screenshot1.png?raw=true "Title")

### Back-end code explanation


1. I used Resource Controller to write less code for routing.

```
Route::resource('tasks', TaskResourceController::class)
    ->only(['index', 'store', 'update', 'destroy']);
```

2. I used Form Requests to handle with the validation errors.

`Http > Requests > StoreTaskRequest.php`
Usage of it in the `TaskResourceController.php`:

```
    public function store(StoreTaskRequest $request): RedirectResponse
    {
        $name = $request->input('name');

        $newTask = new Task();

        $newTask->name = $name;
        $newTask->save();
    }
```

3. I used Laravel's model binding feature for the TaskResourceController like that:

```
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect(route('tasks.index'));
    }
```

### Coding Standard

It is a small project but The PHP coding standard is important for me for any PHP project, therefore I strictly followed PSR-12 coding standard.
And you can see the consistency for variable name convention.
