<div class="row">
    <div class="col-sm-12">

        <div class="row" style="margin-bottom:30px;">
            <div class="col-xs-6">
                <input type="text" style="width:100%;" placeholder="sercz" ng-model="search">
            </div>
            
        </div>
        
        <div class="panel panel-default" ng-repeat="product in products | filter : search">

            <div class="panel-body" ng-init="checkCart( product )">

                <span class="label label-warning pull-right">{{ product.price | number:2 }} zł/kg</span>
                <strong class="pull-left"><a href="#/product/{{product.id}}">{{ product.name | uppercase}}</a></strong><br/>

                <img src="uploads/{{product.id}}/{{product.thumb}}" alt="" style="max-width: 200px; max-height: 100px;" class="img-thumbnail" ng-if="product.thumb">
                <div class="clearfix"></div>
                        
                <div class="row" style="margin-top: 15px;">
                    <div class="col-xs-6">
                        <p><a href="#/product/{{product.id}}" class="btn btn-info" style="width:100%;">Details</a></p>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="pull-right" style="margin-top:0;">{{product.id}}</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <button ng-click="addToCart( product ); checkCart( product )" class="btn btn-primary pull-right" ng-if="!product.qty">Dodaj do koszyka</button>
                        <button ng-click="addToCart( product ); checkCart( product )" class="btn btn-primary pull-right"  ng-if="product.qty">W koszyku: <strong style="color:red;">{{product.qty}}</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>