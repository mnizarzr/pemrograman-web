// Define an array to store tasks
let tasks = [];
let editingIndex = -1;

// Function to render the task list
function renderTaskList() {
    const taskList = document.getElementById("taskList");
    taskList.innerHTML = "";

    tasks.forEach((task, index) => {
        const row = taskList.insertRow();
        row.innerHTML = `
            <td>${task.text}</td>
            <td>
                <button class="btn btn-danger" onclick="deleteTask(${index})">Delete</button>
                <button class="btn btn-primary" onclick="editTask(${index})" data-bs-toggle="modal" data-bs-target="#editTaskModal">Edit</button>
            `;
    });
}

// Function to add a new task
function addTask() {
    const taskInput = document.getElementById("task");
    const taskText = taskInput.value.trim();

    if (taskText !== "") {
        tasks.push({ text: taskText });
        taskInput.value = "";
        renderTaskList();
    }
}

// Function to delete a task
function deleteTask(index) {
    tasks.splice(index, 1);
    renderTaskList();
}

// Function to open the Edit Task modal
function editTask(index) {
    editingIndex = index;
    const taskToEdit = tasks[index];
    const editTaskInput = document.getElementById("editTaskInput");
    editTaskInput.value = taskToEdit.text;
}

// Function to save the edited task
function saveTask() {
    const editTaskInput = document.getElementById("editTaskInput");
    const newText = editTaskInput.value.trim();
    if (newText !== "") {
        tasks[editingIndex].text = newText;
        editingIndex = -1;
        renderTaskList();
    }
}

// Attach event listeners
document.getElementById("addTask").addEventListener("click", addTask);
document.getElementById("saveTaskButton").addEventListener("click", saveTask);

// Initial render
renderTaskList();
