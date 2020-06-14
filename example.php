<?php

use Repository\ScenarioRepository;
use Repository\QuestionRepository;

/* Adding new questions and scenarios */
$questionRepository = new QuestionRepository($db);
$questionRepository->add('make_pie', 'Любите ли вы выпекать пироги?', ['Люблю', 'Думаю только об этом, не могу спать', 'Нет']);

$scenarioRepository = new ScenarioRepository($db, $algorithmFactory);
$scenarioRepository->add(
    'cook',
    [$questionRepository->findByName('make_pie'), ...],
    'cook'
);

/* Output of questions for the scenario */
$scenario = $scenarioRepository->findByName($request->get('scenario_name'));

if ($scenario !== null) {
    $questions = $scenario->getQuestions();
    return new Response($twig->render('questions.html.twig'), compact('questions'));
}

/* Output results */
$scenario = $scenarioRepository->findByName($request->get('scenario_name'));

if ($scenario !== null) {
    $result = $scenario->getResult($request->get('result_points'));
    return new Response($twig->render('result.html.twig'), compact('result'));
}
