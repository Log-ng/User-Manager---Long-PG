{extends file="template.tpl"}

{block name="title"}Create User{/block}

{block name="content"}

<div class="w-50 m-auto border shadow px-2 py-8 rounded  mt-4">
    <form>
        <div class="mb-3">
            <label class="form-label">User ID:</label>
            <input type="number" class="form-control" id="user_d">

        </div>

        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" id="username">

        </div>
        
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" id="password">
        </div>

    <button type="button" class="btn btn-primary mb-3 w-full" id="button_create" onclick=buttonCreateConfirm()>Create</button>
    </form>
</div>

{/block}


