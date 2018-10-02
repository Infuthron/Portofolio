<h1>CMS</h1>
<hr>
<h2>Add project</h2>
<div class="container-fluid bg-secondary">
    <form method="post" action="index.php">
        <label>Project name: <br>
            <input type="text" name="project_name">
        </label><br>
        <label>Project description: <br>
            <textarea rows="4" cols="50" name="project_desc"></textarea>
        </label><br>
        <label>Github link:<br>
            <input type="text" name="project_git">
        </label><br>
        <label>Project blog: <br>
            <input type="text" name="project_blog">
        </label><br>
        <input type="submit" name="project_submit" value="Submit">
    </form>
</div>
<hr>
<h2>Projects:</h2>
<div class="container-fluid">
    {foreach from=$projects item=project}
        <h2>{$project[1]}</h2>
        <p>{$project[2]}</p>
        <a href="{$project[3]}">GitHub</a>
        <a href="{$project[4]}">Blog</a>
        <form method="post" action="index.php">
            <input type="hidden" name="delete_id" value="{$project[0]}">
            <label>Delete:
                <input type="checkbox" name="project_delete_check" value="delete">
            </label>
            <input type="submit" name="submit_project_delete" value="Confirm delete">
            <label>
                <a href="index.php?page=cms_edit_project&id={$project[0]}">Edit</a>
            </label>
        </form>
        <hr>
    {/foreach}
</div>