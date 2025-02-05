import React, { useState } from "react";
import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { motion } from "framer-motion";

const games = [
  { id: 1, name: "Word Matching", description: "Match words in different Indian languages." },
  { id: 2, name: "Sentence Formation", description: "Arrange words to form correct sentences." },
  { id: 3, name: "Picture to Word", description: "Identify objects and learn their names." },
  { id: 4, name: "Fill in the Blanks", description: "Complete the sentence with the correct word." },
  { id: 5, name: "Pronunciation Game", description: "Listen and choose the correct pronunciation." },
  { id: 6, name: "Flashcard Quiz", description: "Learn new words using flashcards." },
];

const GameScreens = {
  1: () => <p>Match words with their translations.</p>,
  2: () => <p>Arrange given words to form a meaningful sentence.</p>,
  3: () => <p>Select the correct word based on the given image.</p>,
  4: () => <p>Fill in the blanks with the correct word.</p>,
  5: () => <p>Listen to the audio and pick the correct pronunciation.</p>,
  6: () => <p>Flip flashcards to learn new words.</p>,
};

export default function LanguageGames() {
  const [selectedGame, setSelectedGame] = useState(null);

  return (
    <div className="p-10 text-center">
      <h1 className="text-3xl font-bold mb-6">Language Learning Games</h1>
      {!selectedGame ? (
        <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
          {games.map((game) => (
            <motion.div whileHover={{ scale: 1.05 }} key={game.id}>
              <Card className="p-4 cursor-pointer" onClick={() => setSelectedGame(game.id)}>
                <CardContent>
                  <h2 className="text-xl font-semibold">{game.name}</h2>
                  <p className="text-sm text-gray-600">{game.description}</p>
                </CardContent>
              </Card>
            </motion.div>
          ))}
        </div>
      ) : (
        <div className="mt-6">
          <h2 className="text-2xl font-bold">{games.find(g => g.id === selectedGame)?.name}</h2>
          {GameScreens[selectedGame]()}
          <Button className="mt-4" onClick={() => setSelectedGame(null)}>
            Back to Games
          </Button>
        </div>
      )}
    </div>
  );
}
