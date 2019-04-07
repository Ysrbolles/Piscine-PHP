todos = [];

function isEmpty(str)
{
    return (str.length == 0 || !str.trim());
}
function ft_error()
{
    alert('Oups something went wrong ... couldn\'t connect to the server'); 
}

function fill(tab)
{
    str = '<h1 id="title">To do list</h1>';
    tab.forEach(function(elem){
        str = str + '<div class="todo" data-id='+ elem[0] + '>' + elem[1] + '</div>';
        todos.push([Number(elem[0]), elem[1]]);
    });
    $("#ft_list").html(str + '<button id="new" name="new">New</button>');
    $("#new").click(function(){
        todo = prompt("Fill To-do");
        id = todos.length ? todos[0][0] + 1 : 1;
        if (!isEmpty(todo))
        {
            $.ajax({
                type: 'GET',
                url: 'insert.php?id=' + id + '&todo=' + todo,
                error: () => ft_error()
            });
            $("#title").after('<div class="todo" data-id='+ id + '>' + todo + '</div>');
            todos.unshift([id, todo]);
        }
    });
}

$.ajax({
    type: 'GET',
    url: 'select.php',
    success: res => fill(res),
    error: () => ft_error()
});

$("#ft_list").click(function(e){
    if (e.target.classList.contains('todo'))
    {
        if (confirm('Are you sure you want to delete "' + e.target.textContent + '" ?'))
        {
            todos.forEach(function(elem, i, tab){
                elem[1] == e.target.textContent ? tab.splice(i, 1) : 1;
            });
            $.ajax({
                type: 'GET',
                url: 'delete.php?id=' + e.target.dataset.id + '&todo=' + e.target.textContent,
                error: () => ft_error()
            });
            e.target.remove();
        }
    }
});