"use client";

import Image from "next/image";
import { useEffect, useState } from "react";

const slides = [
  {
    src: "/images/studio-character-sketch-cropped.png",
    alt: "Chef character sketch"
  },
  {
    src: "/images/studio-character-boy-cropped.png",
    alt: "Boy character design sketch"
  },
  {
    src: "/images/studio-character-businessman-cropped.png",
    alt: "Businessman character sketch"
  },
  {
    src: "/images/studio-character-man-cropped.png",
    alt: "Man character sketch"
  }
];

export function StudioArtSlider() {
  const [activeIndex, setActiveIndex] = useState(0);
  const activeSlide = slides[activeIndex];

  useEffect(() => {
    const timer = window.setInterval(() => {
      setActiveIndex((current) => (current === slides.length - 1 ? 0 : current + 1));
    }, 3200);

    return () => window.clearInterval(timer);
  }, []);

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
      </div>
    </figure>
  );
}
