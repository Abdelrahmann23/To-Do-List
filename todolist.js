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
