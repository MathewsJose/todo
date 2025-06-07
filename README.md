**To-Do List Application**
==========================

A simple and elegant To-Do List application built with **Laravel** (backend) and **Vue.js** (frontend), using **Docker** for containerization. This application allows users to create, manage, and prioritize tasks with ease.

* * * * *

**Features**
------------

-   **Task Creation**: Add tasks with a name, priority (high, medium, low), and label (e.g., work, personal, shopping).

-   **Task Management**: Mark tasks as complete or delete them.

-   **Priority Levels**: Assign priorities to tasks for better organization.

-   **Labels**: Categorize tasks using labels.

* * * * *

**Technologies Used**
---------------------

-   **Frontend**: Vue.js, Axios

-   **Backend**: Laravel, MySQL

-   **Containerization**: Docker

-   **State Management**: Vuex

* * * * *

**Installation Steps**
----------------------

### **Prerequisites**

-   Docker and Docker Compose installed on your machine.

-   Node.js and npm installed (for frontend development).

* * * * *

### **1\. Clone the Repository**

```bash
git clone https://github.com/MathewsJose/todo-app.
cd todo-app
````
* * * * *

### **2\. Set Up Docker**

1.  Navigate to the project root directory:

    
```bash    
cd todo-app
````

2.  Start the Docker containers:

```bash 
docker-compose up --build
````

This will:

-   Build the Laravel backend and Vue.js frontend.

-   Start the MySQL database.

-   Run the Nginx server.


3.  Verify the containers are running:

```bash
docker-compose ps
````
* * * * *

### **3\. Configure the Backend**

1.  Enter the Laravel container:

```bash
docker exec -it todo-app bash
````
2.  Install Composer dependencies:
```bash
composer install
````

3.  Generate the Laravel application key:
```bash
php artisan key:generate
````
4.  Run database migrations:
```bash
php artisan migrate
````
5.  Exit the container:

```bash
exit
````

* * * * *

### **4\. Configure the Frontend**

1.  Navigate to the `frontend` directory:
```bash
cd frontend
````
2.  Install npm dependencies:
```bash
npm install
````
3.  Start the Vue.js development server:
```bash
npm run serve
````

* * * * *

### **5\. Access the Application**

-   **Frontend**: Open your browser and go to `http://localhost:8080`.

-   **Backend API**: The Laravel API is accessible at `http://localhost:8000/api`.

* * * * *

**Usage**
---------

### **1\. Add a Task**

-   Enter a task name, select a priority, and optionally add a label.

-   Click the **Add Task** button to save the task.

### **2\. View Tasks**

-   Tasks are displayed in a list with their name, priority, and label.

-   Completed tasks can be removed by clicking the **Complete** button.

### **3\. Manage Tasks**

-   Use the **Complete** button to mark tasks as done.

-   Tasks are automatically removed from the list once completed.

* * * * *

**Project Structure**
---------------------

```bash
todo-app/
├── backend/               # Laravel backend
│   ├── app/               # Application logic
│   ├── database/          # Database migrations and seeders
│   ├── routes/            # API routes
│   └── ...
├── frontend/              # Vue.js frontend
│   ├── src/               # Vue components and store
│   ├── public/            # Static assets
│   └── ...
├── docker/                # Docker configuration files
│   ├── nginx/             # Nginx configuration
│   └── ...
├── docker-compose.yml     # Docker Compose configuration
└── README.md              # Project documentation
````
* * * * *

**Environment Variables**
-------------------------

The following environment variables are used in the `.env` file:

### **Backend (Laravel)**

env

```bash
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=todo_db
DB_USERNAME=root
DB_PASSWORD=secret
````

### **Frontend (Vue.js)**

```bash
VUE_APP_API_URL=http://localhost:8000/api
````
* * * * *

**Contact**
-----------

For questions or feedback, feel free to reach out:

-   **Mathews Jose**

-   **Email**: <mathewsfrj@gmail.com>

-   **GitHub**: MathewsJose(https://github.com/MathewsJose)

* * * * *

Enjoy using the To-Do List application! 🚀
https://drive.google.com/file/d/11Pv7AeDLePxPDEyKaYmvoM8BCec_uuie/view?usp=sharing
