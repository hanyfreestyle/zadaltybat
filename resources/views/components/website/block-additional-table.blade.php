<div class="row Additional_info">
    <div class="col-12">
        <h2 class="title" > {{__('web/def.Additional_info')}}</h2>
        <table class="table table-bordered">
            @foreach($rowData as $tableData)
                <tr>
                    <td class="td_name">{{$tableData->attributeName->name}}</td>
                    <td class="td_des">{{$tableData->des}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
