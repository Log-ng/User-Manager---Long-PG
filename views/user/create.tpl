{extends file="../common/template.tpl"}

{block name="title"}Create User{/block}

{block name="content"}

<div class="w-50 m-auto border shadow px-5 py-8 rounded mt-4 pl-3">
<form name="createForm" action={$smarty.server.PHP_SELF} onsubmit="return validateForm()" method="post">
    <div class="mb-3 mt-4">
        <label class="form-label">Fullname:</label>
        <span id="err-fullname" class="text-danger small ml-3"></span><br>
        <input type="text" class="form-control" id="fullname" name="fullname">

    </div>

    <div class="mb-3">
        <label class="form-label">Username:</label>
        <span id="err-username" class="text-danger small ml-3"></span><br>
        <input type="text" class="form-control" name="username" id="username">
    </div>
    
    <div class="mb-3">
        <label class="form-label">Password:</label>
        <span id="err-password" class="text-danger small ml-3"></span><br>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="d-flex justify-content-around">   
        <button type="submit" value="Submit" class="btn btn-primary mb-4 px-5" id="button_create" >Create</button>
        <button class="btn btn-danger mb-4 px-5" type="button" onclick=buttonLogin()>Back</button>
    </div>

    </form>
</div>

{/block}


