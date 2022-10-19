        </div>
            <div class="modal-footer">
                @if ($selected_id > 0)
                    <button type="button" class="btn btn-success" >Editar</button>
                @else
                    <button type="submit" class="btn btn-success" >Guardar</button>
                @endif
                <button wire:click.prevent="resetUI()" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>