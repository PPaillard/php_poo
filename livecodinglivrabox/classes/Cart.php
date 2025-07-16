<?php
final class Cart
{
    private array $products = [];

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function showDeliveries(): void
    {
        foreach ($this->products as $product) {
            echo $product->getName();
            echo "<br>";
            echo "Méthode de livraison : " . $product->getDeliveryMethod();
            echo "<br>";
            echo "Détails de livraison : " . $product->getDeliveryDetails();
            echo "<br>";
        }
    }
}
