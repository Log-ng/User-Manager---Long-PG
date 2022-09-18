{extends file="../common/template.tpl"}

{block name="title"}Manager User{/block}

{block name="content"}
    <div>
        <button type="button" class="btn btn-primary  mx-5 mt-4 " id="button_add" onclick=buttonCreate()>Create new user</button>
        <button type="button" class="btn btn-danger  mx-5 mt-4 " id="button_logout" onclick=buttonLogout()>Logout</button>
    </div>
    <div class="border mx-5 mt-4 border-success rounded text-center shadow">
        <table class="table table-bordered table-hover">
            <thead class="text-white table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>

            <tbody class="my-1">
                {foreach from=$users key=index item="user"}
                    <tr class=>
                    <th scope="row">{$index + 1 + ($currentPage - 1)* $RECORD_PER_PAGE}</th>
                        <td>{$user.fullName}</td>
                        <td>{$user.username}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}