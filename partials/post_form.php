<div >
    <h1 class="title">Add new post</h1>
    <form class="field" action="partials/entry_controller.php" method="POST">
        <label for="title" class="label subtitle">Title</label>
        <div class="control">    
            <input type="text" class="input" id="title" name="title" placeholder="Enter title" required>
        </div>
        
        <label for="content" class="label subtitle">Content</label>
        <div class="control">    
            <textarea class="textarea" name="content" id="content" rows="5" placeholder="Enter text" required></textarea>
        </div>
        <br>
        <button type="submit" class="button is-warning">Create post</button>
    </form>
</div>
<br>