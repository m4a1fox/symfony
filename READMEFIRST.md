Ok. To create db in mysql use this command:
$: php app/console doctrine:database:create

For create a table in DB use this command:
$: php app/console doctrine:schema:update --force

But before create a table make sure, that all variable for table desc are create in the class to. Like:
namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $description;
