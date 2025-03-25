Madatech Tasks CRUD.


- To run this project -> : XAMPP, PHP 8 +, MySQL. Used: CodeIgniter4.
- Start Apache & MySQL.
- `` git clone https://github.com/MichelangeloCB/mtechtask `` and put the files in: C:/xampp/htdocs/.
- In .env set hostname and username according to your database settings.
- Set your database port number
- RESTful API - JSON.
- Use a testing platform to test API ports.

Complete CRUD. Add, Edit, List and Delete.

Create new tasks with title, description and status. (PENDING, IN PROGRESS and COMPLETED).
List all registered tasks.
Edit a task.
Delete a Task.


Created:

 * app/Controllers
 * app/Models
 * app/Views
 * app/Config/Routes


Created a RESTful API:

* GET /api/tasks
* GET /api/task/{id}
* POST /api/task
* PUT /api/task/{id}
* DELETE /api/task/{id}

Example:
  ```json
{
	"title": "Title",
	"description": "Task description.",
	"status": "Pending"
}
```
