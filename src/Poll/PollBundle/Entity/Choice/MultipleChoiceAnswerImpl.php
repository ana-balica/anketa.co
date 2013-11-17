<?php
namespace Poll\PollBundle\Entity\Choice;

use Poll\PollBundle\Entity\Respondent;
use Poll\PollBundle\Entity\Question;

/**
 * Implementation of MultipleChoiseAnswer interface
 * @author AnaBalica
 */
class MultipleChoiceAnswerImpl extends ChoiceAnswerImpl implements MultipleChoiceAnswer {

	/**
	 * 
	 * @param Option $option
	 * @return MultipleChoiceQuestion
	 */
	public function addAnswerOption(Option $option) {

	}

	/**
	 * 
	 * @param Option $option
	 * @return ChoiceQuestion
	 */
	public function removeAnswerOption(Option $option) {

	}

	/**
	 * 
	 * @return array[Option]
	 */
	public function getAnswer() {

	}

	/**
	 * 
	 * @param mixed $id
	 * @return Option
	 * @throws ItemDoesNotExistException
	 */
	public function getAnswerOption($id) {

	}

	/**
	 * 
	 * @param Option $option
	 * @return boolean
	 */
	public function hasAnswerOption(Option $option) {

	}

	/**
	 * 
	 * @return Respondent
	 */
	public function getRespondent() {

	}

	/**
	 * 
	 * @param Respondent $respondent
	 */
	public function setRespondent(Respondent $respondent) {

	}	
}