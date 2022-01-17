<h1>Task</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="Tasks/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($showTasks as $task)
        {
            echo '<tr>';
            echo "<td>" . $task->getTitle() . "</td>";
            echo "<td>" . $task->getDescription() . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='Tasks/edit/" . $task->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='Tasks/delete/" . $task->getId() . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>