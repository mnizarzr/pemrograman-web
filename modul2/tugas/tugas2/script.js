let tasks = [];
let editingIndex = -1;

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
            </td>
            `;
    });
}

function addTask() {
    const taskInput = document.getElementById("task");
    const taskText = taskInput.value.trim();

    if (taskText !== "") {
        tasks.push({ text: taskText });
        taskInput.value = "";
        renderTaskList();
    }
}

function deleteTask(index) {
    tasks.splice(index, 1);
    renderTaskList();
}

function editTask(index) {
    editingIndex = index;
    const taskToEdit = tasks[index];
    const editTaskInput = document.getElementById("editTaskInput");
    editTaskInput.value = taskToEdit.text;
}

function saveTask() {
    const editTaskInput = document.getElementById("editTaskInput");
    const newText = editTaskInput.value.trim();
    if (newText !== "") {
        tasks[editingIndex].text = newText;
        editingIndex = -1;
        renderTaskList();
    }
}

document.getElementById("addTask").addEventListener("click", addTask);
document.getElementById("saveTaskButton").addEventListener("click", saveTask);

// renderTaskList();
