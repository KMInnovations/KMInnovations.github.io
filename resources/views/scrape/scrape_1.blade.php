@extends('adminlte::page')
@section('title', 'First DB read')
@section('content')
<style>
    input {
        width: 150px;
        height: 35px;
    }
</style>
<div>
    <form action="scrape_1" method="post">@csrf
        <input name="search" placeholder="Search Item" value="{{$request->search}}">
        <input name="city" placeholder="City" value="{{$request->city}}">
        <input name="state" placeholder="State" value="{{$request->state}}">
        <button type="submit">Parse it!</button>
    </form>
</div>
    <div style="width:80%">
        <table id="main_table" class="display compact">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $lp=0;
                ?>
                @foreach($dom->find('div.phones') as $row)
                <?php 
                if(!$row->text){
                    continue;
                }
                // echo $lp."<br>";
                // dd($row,
                //     $dom->find('h2.n')[$lp]->firstChild(),
                //     $dom->find('h2.n')[$lp]->firstChild()->text,
                //     $dom->find('div.phones'),
                //     $dom->find('div.street-address')[$lp]->text,
                //     $dom->find('div.locality')[$lp]->text,
                // $dom->find('div.street-address'),
                // $dom->find('div.locality'))
                    ?>
                        <tr>
                            <td>{{ 
                              ($dom->find('a.business-name')[$lp]->firstChild()->text?
                                    $dom->find('a.business-name')[$lp]->firstChild()->text:
                                    '')}}</td>
                            <td>{{($row->text!==null?$row->text:'')}}</td>
                            <td><?php echo ($dom->find('div.street-address')[$lp]->text?$dom->find('div.street-address')[$lp]->text:'');?></td>
                            <td><?php echo ($dom->find('div.locality')[$lp]->text?$dom->find('div.locality')[$lp]->text:'');?></td>
                        </tr>
                    <?php 
                $lp++;
                ?>
                @endforeach
            </tbody>
        </table>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('plugins.Datatables', true)
@section('js')
    <script> 
        console.log('Scrape Page'); 
        $("#main_table").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        } );
    </script>
@stop
