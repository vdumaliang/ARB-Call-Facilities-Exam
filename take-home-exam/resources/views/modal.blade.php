<!--Add Modal -->
<form id="addPurchase">
  @csrf
<div class="modal fade" id="orderItemModal" tabindex="-1" role="dialog" aria-labelledby="orderItemModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Purchase Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>ITEM <input id="item" type="text" name="item" class="form-control" required></p>
        <p>CATEGORY 
          <select id="category" class="form-control" name="category">
            <option>School Supply</option>
            <option>Shoes</option>
            <option>Shirt</option>
            <option>Jeans</option>
          </select>
        </p>
        <p>QUANTITY <input id="quantity" type="number" name="quantity" class="form-control"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
</form>




<!--DELETE Modal -->
<form id="deletePurhcase">
  @csrf
<div class="modal fade" id="deletePurchaseModal" tabindex="-1" role="dialog" aria-labelledby="deletePurchaseModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
</form>