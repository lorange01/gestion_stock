<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\Stock;
use AppBundle\Form\ProductType;
use AppBundle\Form\StockType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findAll();


        return $this->render('default/index.html.twig', [
            'products' => $products

        ]);
    }


    /**
     * @Route("/products", name="product_list")
     */
    public function listProductAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('AppBundle:Product')->findAll();

        return $this->render('default/index.html.twig', [
            'products' => $products

        ]);
    }

    /**
     * @Route("/stocks", name="stock_list")
     */
    public function listStockAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $stocks = $em->getRepository('AppBundle:Stock')->findAll();


        return $this->render('default/stock/list.html.twig', [
            'stocks' => $stocks

        ]);
    }

    /**
     * @Route("/product/add", name="product_add")
     */
    public function addProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product, array());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($product);
            $em->flush();
            $this->setFlash("custom-alerts alert alert-success fade in",
                '<i class="fa fa-check"></i> Le produit <b>' . $product->getName() . '</b> a été bien crée.');
            return $this->redirectToRoute('homepage');
        }
        return $this->render('default/product/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/stock/add", name="stock_add")
     */
    public function addStockAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock, array());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($stock);
            $em->flush();
            $this->setFlash("custom-alerts alert alert-success fade in",
                '<i class="fa fa-check"></i> Le Stock <b>' . $stock->getTitle() . '</b> a été bien crée.');
            return $this->redirectToRoute('homepage');
        }
        return $this->render('default/stock/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/product/edit/{id}", name="product_edit")
     */
    public function editProductAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->find($id);

        if (null === $product) {
            $this->setFlash('custom-alerts alert alert-danger fade in', '<i class="fa fa-warning"></i> Le produit n\'a pu être trouvé!');
            return $this->redirectToRoute('homepage');
        }
        $form = $this->createForm(ProductType::class, $product, array());


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($product);
            $em->flush();
            $this->setFlash("custom-alerts alert alert-success fade in",
                '<i class="fa fa-check"></i> Le produit <b>' . $product->getName() . '</b> a été bien modifié.');

            return $this->redirectToRoute('homepage');

        }
        return $this->render('default/product/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
    
      /**
     * @Route("/stock/edit/{id}", name="stock_edit")
     */
    public function editStockAction(Request $request,$id)
    {

        $em = $this->getDoctrine()->getManager();
        $stock = $em->getRepository('AppBundle:Stock')->find($id);
        $form = $this->createForm(StockType::class, $stock, array());

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($stock);
            $em->flush();
            $this->setFlash("custom-alerts alert alert-success fade in",
                '<i class="fa fa-check"></i> Le Stock <b>' . $stock->getTitle() . '</b> a été bien modifié.');

            return $this->redirectToRoute('homepage');
        }
        return $this->render('default/stock/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/product/remove/{id}", name="product_remove")
     */
    public function removeProductAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->find($id);

        if (null === $product) {
            $this->setFlash('custom-alerts alert alert-danger fade in', '<i class="fa fa-warning"></i> Le produit n\'a pu être trouvé!');
            return $this->redirectToRoute('homepage');
        }

        $em->remove($product);
        $em->flush();
        $em->flush();


        $this->setFlash("custom-alerts alert alert-success fade in",
            '<i class="fa fa-check"></i> Le produit <b>' . $product->getName() . '</b> a été bien crée.');

        return $this->redirectToRoute('homepage');
    }   
    
    /**
     * @Route("/stock/remove/{id}", name="stock_remove")
     */
    public function removeStockAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->find($id);

        if (null === $product) {
            $this->setFlash('custom-alerts alert alert-danger fade in', '<i class="fa fa-warning"></i> Le produit n\'a pu être trouvé!');
            return $this->redirectToRoute('homepage');
        }

        $em->remove($product);
        $em->flush();
        $this->setFlash("custom-alerts alert alert-success fade in",
            '<i class="fa fa-check"></i> Le produit <b>' . $product->getName() . '</b> a été bien crée.');

        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/init_data", name="init_data")
     */
    public function initAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = array(
            array(
                "name" => "Tee Shirt NIKE",
                "ref" => "1ER13ZE23",
                "purchase" => 5.99,
                "sale" => 9.99,
            ),
            array(
                "name" => "Sac à dos ADIDAS",
                "ref" => "55R13ZEZ3",
                "purchase" => 25.99,
                "sale" => 35.99,
            ),

            array(
                "name" => "Chemise en jean",
                "ref" => "AER1ZEZ3",
                "purchase" => 15.90,
                "sale" => 18.90,
            ),
            array(
                "name" => "Short MKD",
                "ref" => "D1AER1ZEZ3",
                "purchase" => 12.90,
                "sale" => 13.90,
            ),

        );


        foreach ($data as $val) {
            $product = new Product();
            $product->setName($val['name']);
            $product->setRef($val['ref']);
            $product->setPurchasePrice($val['purchase']);
            $product->setSalePrice($val['sale']);
            $em->persist($product);
        }
        $em->flush();

        die ("INIT DATA");
    }

    /*
         * @doc custom-alerts alert alert-danger fade in
         */
    private
    function setFlash($action, $value)
    {
        $this->container->get('session')->getFlashBag()->set($action, $value);
    }

}
