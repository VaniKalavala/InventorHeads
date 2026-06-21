"use client";

import Image from "next/image";
import { useState } from "react";

const slides = [
  {
    src: "/images/studio-character-sketch.png",
    alt: "Chef character sketch"
  },
  {
    src: "/images/studio-character-boy.png",
    alt: "Boy character design sketch"
  },
  {
    src: "/images/studio-character-vanz.png",
    alt: "Vanz character design"
  },
  {
    src: "/images/studio-character-businessman.png",
    alt: "Businessman character sketch"
  },
  {
    src: "/images/studio-character-man.png",
    alt: "Man character sketch"
  }
];

export function StudioArtSlider() {
  const [activeIndex, setActiveIndex] = useState(0);
  const activeSlide = slides[activeIndex];

  const goToPrevious = () => {
    setActiveIndex((current) => (current === 0 ? slides.length - 1 : current - 1));
  };

  const goToNext = () => {
    setActiveIndex((current) => (current === slides.length - 1 ? 0 : current + 1));
  };

  return (
    <figure className="studio-intro__art">
      <div className="studio-art-slider" aria-label="Studio character art slider">
        <Image
          key={activeSlide.src}
          src={activeSlide.src}
          alt={activeSlide.alt}
          width={644}
          height={644}
          sizes="(max-width: 860px) 90vw, 42vw"
          priority={activeIndex === 0}
        />
        <div className="studio-art-slider__controls" aria-label="Slide controls">
          <button type="button" onClick={goToPrevious} aria-label="Previous character image">
            &lt;
          </button>
          <span>
            {activeIndex + 1} / {slides.length}
          </span>
          <button type="button" onClick={goToNext} aria-label="Next character image">
            &gt;
          </button>
        </div>
      </div>
    </figure>
  );
}
