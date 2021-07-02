@csrf

    <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="text-black" for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" @isset($portafolio) value="{{ $portafolio->nombre }}" @endisset placeholder="" required>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
            <label class="text-black" for="nombreingles">Nombre en Ingles:</label>
            <input type="text" id="nombreingles" name="nombreingles" class="form-control" @isset($portafolio) value="{{ $portafolio->nombreingles }}" @endisset placeholder="" required>
        </div>
    </div>

    @if (isset($portafolio))
        <div class="row form-group" hidden>
            <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="imagen">Nombre de la Imagen:</label>
                <input type="text" id="imagen" name="imagen" class="form-control"  @isset($portafolio) value="{{ $portafolio->imagen }}" @endisset placeholder="" required>
            </div>
        </div>
    @else
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="imagen">Nombre de la Imagen:</label>
                <input type="text" id="imagen" name="imagen" class="form-control" placeholder="" required>
            </div>
        </div>
    @endif


    <div class="row form-group">
        <div class="col-md-2 mb-3 mb-md-0">
            <label for="visible" class="font-weight-bold">Visible</label>
            <select type="text" class="form-control" id="visible" name="visible" required>

                @if (isset($portafolio))
                    <option selected value="{{ $portafolio->visible }}">{{ $portafolio->visible }}</option>
                @else
                    <option selected value="">Seleccione...</option>
                @endif


                <option value="SI">SI</option>
                <option value="NO">NO</option>

            </select>
        </div>
    </div>

    @if (isset($portafolio))
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="img_path">Seleccione una imagen:</label>
                <input type="file" class="form-control-file" id="img_path" name="img_path">
            </div>
        </div>
    @else
        <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="img_path">Seleccione una imagen:</label>
                <input type="file" class="form-control-file" id="img_path" name="img_path" required>
            </div>
        </div>
    @endif
