<?php
namespace Poll\PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Poll\PollBundle\Common\Collection;
use Poll\PollBundle\Common\IdentifiedClass;

/**
 * Implementace entity anketa
 * @author jirkovoj
 *
 * @ORM\Entity
 * @ORM\Table(name="Poll")
 */
class PollImpl extends IdentifiedClass implements Poll {

	/**
     * @ORM\Column(type="string", length=255)
     */
	protected $title;

	/**
     * @ORM\Column(type="text", nullable=True)
     */
	protected $description;

	/** @var Collection */
	protected $items;

	public function __construct() {
		//vygeneruje se id z vzdaleneho rodice IdentifiedClass
		parent::__construct();
		$this->items = new Collection();
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::addItem()
	 */
	public function addItem(PollItem $item) {
		$this->items->addItem($item, true);
		return $this;
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::removeItem()
	 */
	public function removeItem(PollItem $item) {
		$this->items->removeItem($item, true);
		return $this;
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::getItems()
	 */
	public function getItems() {
		return $this->items->getItems();
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::getItem()
	 */
	public function getItem($id) {
		return $this->items->getItem($id);
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::hasItem()
	 */
	public function hasItem(PollItem $item) {
		return $this->items->hasItem($item);
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::getTitle()
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::setTitle()
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::getDescription()
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * (non-PHPdoc)
	 * @see \Poll\PollBundle\Entity\Poll::setDescription()
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
}
