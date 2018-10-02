<h1>Edit project</h1>
<form method="post" action="index.php">
    <input type="hidden" name="project_edit_id" value="{$edit[0]}">
    <input name="project_name_edit" type="text" value="{$edit[1]}">
    <br>
    <textarea name="project_desc_edit">{$edit[2]}</textarea><br>
    <input type="text" name="project_git_edit" value="{$edit[3]}"><br>
    <input type="text" name="project_blog_edit" value="{$edit[4]}"><br>
    <input type="submit" name="submit_edited_project" value="Submit Edit">
</form>