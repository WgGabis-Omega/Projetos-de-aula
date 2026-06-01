const stories = [
    {
        id: 1,
        title: "Nome Genérico 1",
        author: "Edna"
    }

];

exports.getStories = (req, res) => {
    res.json(stories);
};

exports.createStory = (req, res) => {
    const story = req.body;

    stories.push(story);

    res.status(201).json({
        message: 'Historia criada com Sucesso!' 
    });
};