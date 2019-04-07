const list = document.querySelector("#ft_list");
const local = window.localStorage;
const todos = local.getItem('list') ? local.getItem('list').split(',') : [];



String.prototype.isEmpty = function() {
    return (this.length === 0 || !this.trim());
};

function fill(arr) {
	let str = '<h1 id="title">To-do list</h1>';
    arr.forEach(function(elem){
		str = str + `<div class="todo">${elem}</div>`;
	});
	list.innerHTML = `${str}<button id="new" name="new">New</button>`;
}

fill(todos);

document.querySelector('#new').addEventListener('click', function(e) {
	let todo = prompt('Fill to-do');
    if (!todo.isEmpty()) {
		list.children[1].insertAdjacentHTML('beforebegin', `<div class="todo">${todo}</div>`);
		todos.unshift(todo);
		local.setItem('list', todos);
	}
});

list.addEventListener('click',function(e) {
	if (e.target.classList.contains('todo'))
		if (confirm(`Are you sure you want to delete "${e.target.textContent}" ?`)) {
			todos.forEach((cur, i, arr) => cur == e.target.textContent ? arr.splice(i, 1) : 1);
			local.setItem('list', todos);
			e.target.remove();
		}
});