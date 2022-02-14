
@section('main')
<?php $i = 0; ?>
    @foreach($attachments as $attachment)
    <?php $i++; ?>
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $attachment->name }}</td>
        <td>{{ $attachment->created_at }}</td>
        <td colspan="2">
            <a class="btn btn-outline-success btn-sm"
               href="{{ route('homework.View_file',['path'=>$attachment->path,'file_name'=>$attachment->name])  }}"
               role="button"><i class="fas fa-eye"></i>&nbsp;
                </a>

            <a class="btn btn-outline-info btn-sm"
               href="{{route('homework.download',['path'=>$attachment->path,'file_name'=>$attachment->name]) }}"
               role="button"><i
                    class="fas fa-download"></i>&nbsp;
                </a>

            {{--   @can('حذف المرفق')  --}}
            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
               data-attachment_id="{{ $attachment->id }}"
            data-bs-toggle="modal"  href="#modaldemo1" title="delete"><i
                class="las la-trash"></i></a>
            {{--   @endcan  --}}

        </td>
    </tr>
    @endforeach
<div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Delete User</h6>
                <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('homework.delete_file') }}" method="post">
                    {{ method_field('post') }}
                    @csrf
                    <div class="modal-body">
                        <p>? Do Yoy Want to Delete This attachment </p><br>

                        <input class="form-control" hidden name="attachment_id" value="" id="attachment_id" type="text" readonly>

                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit">Delete</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                    </div>


                </form>

            </div>

        </div>
    </div>
</div>

<script>
    $('#modaldemo1').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var attachment_id = button.data('attachment_id')
        var modal = $(this)
        modal.find('.modal-body #attachment_id').val(attachment_id);
    })

</script>

@stop
