# Diggin' In (Laravel 5.1) - Simple Task Manager Application from Laracasts.com

About This Series

So you're at the initial stage, where you've toyed with Laravel, but haven't quited dug in yet? Great! Let's build a little tool together, as an exercise.

## <a href="https://github.com/Iriarte81/TaskManager/commit/6e510d99b62d35cfb610bca126b5c3e4964ab8b3">Setup</a>
So you're at the initial stage, where you've toyed with Laravel, but haven't quite dug in yet? Great! Let's build a little app together.

## <a href="https://github.com/Iriarte81/TaskManager/commit/81eb004df32050217db0927fb59c2456797b7a72">Design and Migrations</a>

Let's take just a moment (and I mean "moment") to tweak the design to be somewhat more friendly. Next, we'll discuss the power of migrations and seed files.

## <a href="https://github.com/Iriarte81/TaskManager/commit/89c5c0bb4237f6459ebcb399a9de927b1011e974">Relationships</a>

Moving along, we'll now discuss relationships. If a task belongs to a user, and a user can have many tasks, how can we represent that with Laravel

## <a href="https://github.com/Iriarte81/TaskManager/commit/3383d721ac5434c2619a7b8b334eb71ad641694b">Gravatars and Eager Loading</a>

Ever heard of the N + 1 dilemma? Well, you'll see it first-hand in this lesson, along with how to fix it. Also, along the way, we'll add support for displaying Gravatars next to tasks.

## <a href="https://github.com/Iriarte81/TaskManager/commit/91b5ddc3c621a79fd42fc212b942c58f9a765f35">Cleanup</a>

In this lesson, we'll tackle a number of different things. Mostly, though, the name of the game is cleanup.

##<a href="https://github.com/Iriarte81/TaskManager/commit/4aaea75f83b7d6f29bda93e0e71a948bfa55b43e">Forms</a>

In this lesson, we'll build a form to create new tasks. In particular, we'll learn how to, when filling out the form, specify which user we wish to assign the task to.

## <a href="https://github.com/Iriarte81/TaskManager/commit/3efc47e5c3d03efb0fbe7c9db2f84c198d6e5ca0">Validation Services</a>

We can't allow users to create new tasks, without first filtering the form data through some form of validation! Get ready, because we'll tackle a number of topics in this lesson, including the single responsibility principle, service classes, custom exceptions, and more.

If this episode feels a bit overwhelming, that's okay. It's just a teaser. In the next lesson, we'll review a different approach: validation with model events.

#<a href="https://github.com/Iriarte81/TaskManager/commit/5449fff98bd59aa6735d7d4d2eface84abe1070d">Validation Redux and Completing Tasks</a>

In the previous lesson, I demonstrated a high-level way to manage your validation. We used services and custom exceptions to handle the flow. In this lesson, however, we'll back-track and try a different approach: hooking into model events.

As with many things in the coding world, there are multiple ways to achieve a particular end goal.

As we slowly begin to finish up this demo project, we need to take some time to allow users to complete tasks (and style those tasks accordingly).
