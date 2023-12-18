<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">テーブル</h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered" border="1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Tensu</th>
                                <th>Content</th>
                                <th>Deleted Flag</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tes as $tes)
                            <tr>
                                <td>{{ $tes->id }}</td>
                                <td>{{ $tes->name }}</td>
                                <td>{{ $tes->tensu }}</td>
                                <td>{{ $tes->content }}</td>
                                <td>{{ $tes->deleted_flag }}</td>
                                <td>{{ $tes->created_at }}</td>
                                <td>{{ $tes->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form method="POST" id="insert" action="{{route('test.store')}}">
                    @csrf
                        <p>INSERT</p>
                        <div>
                        <label for="form-name">Name</label>
                        <input type="text" name="name" id="form-name" required>
                        </div>

                        <div>
                        <label for="form-tel">Tensu</label>
                        <input type="text" name="tensu" id="form-tensu">
                        </div>

                        <div>
                        <label for="form-email">Content</label>
                        <input type="text" name="content" id="form-content">
                        </div>

                        <button type="submit" name="insert">登録</button>

                    </form>
                    <form method="POST" id="update" action="{{route('test.store')}}">
                    @csrf
                        <p>UPDATE</p>
                        <div>
                        <label for="form-id">Id</label>
                        <input type="text" name="id" id="form-id">
                        <div>
                        <label for="form-name">Name</label>
                        <input type="text" name="name" id="form-name" required>
                        </div>

                        <div>
                        <label for="form-tel">Tensu</label>
                        <input type="text" name="tensu" id="form-tensu">
                        </div>

                        <div>
                        <label for="form-email">Content</label>
                        <input type="text" name="content" id="form-content">
                        </div>

                        <button type="submit" name="update">変更</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
