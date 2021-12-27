<style>
    .links nav {
        float: right;
    }
    .links nav ul {
        margin-bottom: 0;
    }
</style>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-12">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <div class="col-12">
                <form action="" id="form-lista">
                    @csrf
                    <div class="row">
                        <div class="col-1">
                            @include('components.input-forms.select', [
                                'name' => 'paginate',
                                'options' => ['10', '20', '50', '100'],
                                'script' => 'onchange="$("#form-lista").submit()"'
                            ])
                        </div>
                        <div class="col-4 ml-auto">
                            @include('components.input-forms.input-text', [
                                'name' => 'value'
                            ])
                        </div>
                        <div class="col-1">
                            <button class="btn btn-outline-primary mb-0 form-group w-100" type="submit"><i class="fas fa-search"></i></button>

                        </div>
                    </div>


                </form>
            </div>
        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                @forelse($listaCampos as $campo)
                    <th>{{ $campo }}</th>
                @empty
                @endforelse

            </tr>
            </thead>
            <tbody>

                {!! $listaHtml !!}
            </tbody>
            <tfoot>
            <tr>
                @forelse($listaCampos as $campo)
                    <th>{{ $campo }}</th>
                @empty
                @endforelse
            </tr>
            </tfoot>
        </table>

        <div class="row mt-3">
            <div class="col-6 my-auto">Mostrando {{ $lista->firstItem() }} ate {{ $lista->lastItem() }} de {{ $lista->total() }}</div>
            <div class="col-6 links">{{ $lista->appends(['order_by' => '', 'paginate' => 10])->links() }}</div>
        </div>
    </div>

    <!-- /.card-body -->
</div>

