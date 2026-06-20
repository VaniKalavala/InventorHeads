"use client";

import { useEffect, useState } from "react";

const videos = [
  {
    id: "pZIW7H1QIiw",
    title: "Feature film background video"
  },
  {
    id: "AUoUWoAIHXU",
    title: "Production reel background video"
  }
];

function getEmbedUrl(id: string) {
  return `https://www.youtube.com/embed/${id}?autoplay=1&mute=1&controls=0&playsinline=1&rel=0&modestbranding=1&loop=1&playlist=${id}`;
}

export function HomeVideoBackground() {
  const [activeIndex, setActiveIndex] = useState(0);
  const activeVideo = videos[activeIndex];

  useEffect(() => {
    const timer = window.setTimeout(() => {
      setActiveIndex(1);
    }, 120000);

    return () => window.clearTimeout(timer);
  }, []);

  return (
    <div className="home-video-hero__background" aria-hidden="true">
      <iframe
        key={activeVideo.id}
        src={getEmbedUrl(activeVideo.id)}
        title={activeVideo.title}
        allow="autoplay; encrypted-media; picture-in-picture; web-share"
      />
    </div>
  );
}
