<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User dashboard</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #E5E1DA;
    color: white;
    font-family: "Poppins", sans-serif;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

header {
    font-size: 1.5rem;
    margin: 20px 0;
    color: #AAD7D9;
}

.form-container {
    background-color:#AAD7D9; 
    border-radius: 10px;
    padding: 20px;
    width: 80%;
    max-width: 600px; 
    display: flex;
    flex-direction: column;
    align-items: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.input-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin-bottom: 10px;
}

/* Style for the form inputs, buttons, and selects */
form input, 
form button, 
form select {
    padding: 0.5rem;
    font-size: 1.2rem; /* Form input font size */
    border: none;
    background: white;
    border-radius: 5px;
    margin: 0.5rem;
    width: 100%; 
}

form button {
    color: rgb(255, 200, 0);
    cursor: pointer;
    transition: all 0.3s ease;
}

form button:hover {
    color: white;
    background: rgb(255, 200, 0);
}

/* Container for the tasks */
/* Container for the tasks */
.todo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    width: 50%; /* Reduce the width of the container to make the column smaller */
}

/* The list that contains all the tasks */
.todo-list {
    width: 100%;
    list-style: none;
}

/* Task items */
.todo {
    margin: 0.5rem 0;
    padding: 0.3rem 0.5rem; /* Reduced padding for smaller task size */
    background: #E5E1DA; /* Set background color */
    color: black;
    font-size: 1.2rem; /* Adjusted to match form font size */
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 5px; /* Added border radius for rounded look */
    transition: 0.5s;
}

/* Task list items */
.todo li {
    flex: 1;
}

/* Buttons for marking complete and deleting tasks */
.trash-btn, 
.complete-btn {
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    cursor: pointer;
    font-size: 1.2rem;
}

.complete-btn {
    background: rgb(255, 200, 0);
}

.trash-btn {
    background: rgb(171, 171, 171);
}

/* Styling for completed tasks */
.completed {
    text-decoration: line-through;
    opacity: 0.5;
}


.slide {
    transform: translateX(10rem);
    opacity: 0;
}

select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    border: none;
    padding: 0.5rem; 
    font-size: 1.2rem; 
}

.select {
    margin: 1rem;
    position: relative;
    overflow: hidden;
    width: 100%; 
}

.select::after {
    content: "\25BC";
    position: absolute;
    background: rgb(255, 200, 0);
    top: 0;
    right: 0;
    padding: 1rem;
    pointer-events: none;
    transition: all 0.3s ease;
}
.color-circle {
    display: inline-block;
    width: 12px; 
    height: 12px;
    border-radius: 50%; 
    margin-left: 5px; 
    vertical-align: middle; 
}

  </style>
<body>
<?php include 'dashboard.php';?>
<header>
    <h1>My To Do List</h1>
</header>

<div class="form-container">
    <form id="todo-form">
        <div class="input-container">
            <input type="text" class="todo-input" placeholder="Add a task..." required>
            <button class="todo-button" type="submit">
                <i class="fas fa-plus-circle"></i>
            </button>
        </div>
        <input type="date" class="todo-deadline">
        <select class="todo-priority" required>
            <option value="" disabled selected>Priority</option>
            <option value="high" style="color: #FF6B6B;">High</option>
            <option value="medium" style="color: #FFD93D;">Medium</option>
            <option value="low" style="color: #6BCB77;">Low</option>
        </select>
        <select class="todo-category" required>
            <option value="" disabled selected>Category</option>
            <option value="work">Work</option>
            <option value="home">Home</option>
            <option value="entertainment">Entertainment</option>
        </select>
        <select class="todo-reminder" required>
            <option value="" disabled selected>Reminder</option>
            <option value="1-hour">1 Hour</option>
            <option value="1-day">1 Day</option>
        </select>
        <div class="select">
            <select name="todos" class="filter-todo">
                <option value="all">All</option>
                <option value="completed">Completed</option>
                <option value="incomplete">Incomplete</option>
            </select>
        </div>
    </form>
</div>

<div class="todo-container">
    <ul class="todo-list"></ul>
</div>


<script>
  // Selectors
const todoInput = document.querySelector('.todo-input');
const todoButton = document.querySelector('.todo-button');
const todoList = document.querySelector('.todo-list');
const todoPriority = document.querySelector('.todo-priority');
const todoCategory = document.querySelector('.todo-category');
const todoReminder = document.querySelector('.todo-reminder');
const filterOption = document.querySelector('.filter-todo');

// Event Listeners
todoButton.addEventListener('click', addTodo);
todoList.addEventListener('click', deleteCheck);

// Functions
function addTodo(event) {
    event.preventDefault();
    
    // Validate inputs
    if (todoInput.value.trim() === '' || 
        todoPriority.value === '' || 
        todoCategory.value === '' || 
        todoReminder.value === '') {
        alert('Please fill in all fields before adding a task.');
        return; // Exit the function if validation fails
    }
    
    // Create Todo Div
    const todoDiv = document.createElement('div');
    todoDiv.classList.add('todo');
    
    // Create List Item
    const newTodo = document.createElement('li');
    newTodo.innerText = `${todoInput.value}`;
    newTodo.classList.add('todo-item');
    todoDiv.appendChild(newTodo);
    
    // Add priority color
    const priority = todoPriority.value;
    if (priority === 'high') {
        todoDiv.style.borderLeft = "4px solid #FF6B6B";
        newTodo.innerHTML += ' <i class="fas fa-circle" style="color: #FF6B6B;"></i>';
    } else if (priority === 'medium') {
        todoDiv.style.borderLeft = "4px solid #FFD93D";
        newTodo.innerHTML += ' <i class="fas fa-circle" style="color: #FFD93D;"></i>';
    } else if (priority === 'low') {
        todoDiv.style.borderLeft = "4px solid #6BCB77";
        newTodo.innerHTML += ' <i class="fas fa-circle" style="color: #6BCB77;"></i>';
    }

    // Add reminder
    const reminder = todoReminder.value;
    newTodo.innerHTML += ` [Reminder: ${reminder}]`;

    // Check mark button
    const completedButton = document.createElement('button');
    completedButton.innerHTML = '<i class="fas fa-check"></i>';
    completedButton.classList.add('complete-btn');
    todoDiv.appendChild(completedButton);
    
    // Trash button
    const trashButton = document.createElement('button');
    trashButton.innerHTML = '<i class="fas fa-trash"></i>';
    trashButton.classList.add('trash-btn');
    todoDiv.appendChild(trashButton);
    
    // Append to List
    todoList.appendChild(todoDiv);
    
    // Clear Input Fields
    todoInput.value = '';
    todoPriority.value = '';
    todoCategory.value = '';
    todoReminder.value = '';
}

function deleteCheck(e) {
    const item = e.target;
    
    // Delete TODO
    if (item.classList[0] === 'trash-btn') {
        const todo = item.parentElement;
        // Animation
        todo.classList.add('fall');
        todo.addEventListener('transitionend', function() {
            todo.remove();
        });
    }
    
    // Mark as completed
    if (item.classList[0] === 'complete-btn') {
        const todo = item.parentElement;
        todo.classList.toggle('completed');
    }
}
  </script>
</body>
</html>