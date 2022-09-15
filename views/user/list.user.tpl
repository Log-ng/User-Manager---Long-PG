<div class="border mx-5 mt-4 border-success rounded text-center shadow">
    <table class="table table-bordered table-hover">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Full name</th>
            <th scope="col">Username</th>
        </tr>
        </thead>
        <tbody class="my-1">
        {foreach from=$users item="user"}
            <tr class=>
                <th scope="row">{$user.user_id}</th>
                <td >{$user.fullName}</td>
                <td>{$user.username}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>


